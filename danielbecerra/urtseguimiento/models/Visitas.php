<?php namespace DanielBecerra\UrtSeguimiento\Models;

use Model;
use Request;
use October\Rain\Database\Traits\Purgeable;

/**
 * Model
 */
class Visitas extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use Purgeable;
    
    public function getHasSeguimientosAttribute()
    {
        return $this->visitasSeguimiento()->count() > 0;
    }

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'danielbecerra_urtseguimiento_visitas';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    /**
     * @var array belongsTo relationship.
     */
    public $belongsTo = [
        'sede' => 'DanielBecerra\UrtSeguimiento\Models\Sedes',
        'user' => ['Backend\Models\User', 'key' => 'user_id']
    ];

    public $hasMany = [
        'visitasListaChequeo' => ['DanielBecerra\UrtSeguimiento\Models\VisitasListaChequeo', 'key' => 'visita_id'],
        'visitasSeguimiento' => ['DanielBecerra\UrtSeguimiento\Models\VisitasSeguimientos', 'key' => 'visita_id'],
        'visitasCompromisos' => ['DanielBecerra\UrtSeguimiento\Models\VisitasCompromisos', 'key' => 'visita_id']
    ];

    public $belongsToMany = [
        'listaChequeoItems' => [
            'DanielBecerra\UrtSeguimiento\Models\ListaChequeoItems',
            'table' => 'danielbecerra_urtseguimiento_visitas_listachequeo',
            'key' => 'visita_id',
            'otherKey' => 'listachequeo_item_id',
            'timestamps' => true
        ]
    ];

    public function getVisitasOptions()
    {
        // Obtener el ID actual de la URL usando el segmento 'id' en la ruta
        $currentId = Request::segment(6);  // Ajustar el número de segmento según la estructura de la URL

        return $this->where('id', $currentId)
            ->pluck('fecha', 'id')  // Assuming 'fecha' is the column you want to pluck
            ->toArray();
    }

    public function getListaChequeoOptions()
    {
        // Obtener todos los registros donde 'parent_id' es nulo (categorías superiores/padres)
        $parents = \DanielBecerra\UrtSeguimiento\Models\ListaChequeo::has('children')->pluck('id')->toArray();

        // Devolver solo los registros que no son padres
        return \DanielBecerra\UrtSeguimiento\Models\ListaChequeo::whereNotIn('id', $parents)
            ->pluck('nombre', 'id')
            ->toArray();
    }

    /**
     * Campos que no se guardarán en la base de datos
     */
    protected $purgeable = ['listachequeo'];
    protected $keepPurgeableValues = true; // Mantener los valores purgados
    protected $listachequeoSelected = []; // Lista de listachequeo seleccionados

    /**
     * Método beforeSave para capturar los listachequeo seleccionados
     */
    public function beforeSave()
    {
        // Guardar los listachequeo seleccionados
        if (!empty($this->listachequeo) && is_array($this->listachequeo)) {
            $this->listachequeoSelected = $this->listachequeo;
        }
    }

    /**
     * Método afterSave para procesar los listachequeo seleccionados
     */
    public function afterSave()
    {
        if (!empty($this->listachequeoSelected)) {
            // Obtener los IDs de ListaChequeoItems relacionados
            $listaChequeoItemsIds = \DanielBecerra\UrtSeguimiento\Models\ListaChequeoItems::whereIn('listachequeo_id', $this->listachequeoSelected)
                ->pluck('id')
                ->toArray();

            if (!empty($listaChequeoItemsIds)) {
                // Asociar los items a la visita con resultado_id = 7 que es el estado de Items de Chequeo en Ajustes
                $attachData = array_fill_keys($listaChequeoItemsIds, ['resultado_id' => 7]);
                $this->listaChequeoItems()->attach($attachData);
            }
        }
    }

    /**
     * Método afterDelete para soft-eliminar los VisitasListaChequeo asociados
     */
    protected function afterDelete()
    {
        if ($this->isSoftDelete()) {
            // Soft-eliminar los registros VisitasListaChequeo asociados
            \DanielBecerra\UrtSeguimiento\Models\VisitasListaChequeo::where('visita_id', $this->id)
                ->delete();
        }
    }

    /**
     * Método afterRestore para restaurar los VisitasListaChequeo asociados
     */
    protected function afterRestore()
    {
        // Restaurar los registros VisitasListaChequeo asociados
        \DanielBecerra\UrtSeguimiento\Models\VisitasListaChequeo::where('visita_id', $this->id)
            ->onlyTrashed()
            ->restore();
    }

}
