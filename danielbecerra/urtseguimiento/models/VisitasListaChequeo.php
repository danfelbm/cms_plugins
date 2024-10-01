<?php namespace DanielBecerra\UrtSeguimiento\Models;

use Model;

/**
 * Model
 */
class VisitasListaChequeo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \DanielBecerra\UrtSeguimiento\Traits\FilterableByVisita;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'danielbecerra_urtseguimiento_visitas_listachequeo';

    protected $with = ['listachequeo_item'];

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $belongsTo = [
        'visita' => ['DanielBecerra\UrtSeguimiento\Models\Visitas', 'key' => 'visita_id'],
        'listachequeo_item' => [
            'DanielBecerra\UrtSeguimiento\Models\ListaChequeoItems',
            'key' => 'listachequeo_item_id'
        ],
        'seguimiento' => ['DanielBecerra\UrtSeguimiento\Models\VisitasSeguimientos', 'key' => 'seguimiento_id'],
        'resultado' => ['DanielBecerra\Ajustes\Models\Estados', 'key' => 'resultado_id']
    ];

    public function scopeFilterByItemCategoria($query, $scope)
    {
        // Obtener el valor del filtro
        $listachequeoId = $scope->value;

        // Filtrar VisitasListaChequeo donde listachequeo_item tiene el listachequeo_id dado
        return $query->whereHas('listachequeo_item', function($q) use ($listachequeoId) {
            $q->where('listachequeo_id', $listachequeoId);
        });
    }

}