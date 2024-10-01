<?php namespace DanielBecerra\UrtSeguimiento\Models;

use Model;

/**
 * Model
 */
class VisitasCompromisos extends Model
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
    public $table = 'danielbecerra_urtseguimiento_visitas_compromisos';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    protected $with = ['visita'];

    /**
     * @var array belongsTo relationship.
     */
    public $belongsTo = [
        'visita' => 'DanielBecerra\UrtSeguimiento\Models\Visitas',
        'seguimiento' => 'DanielBecerra\UrtSeguimiento\Models\VisitasSeguimientos',
        'estado' => 'DanielBecerra\Ajustes\Models\Estados',
        'item' => ['DanielBecerra\UrtSeguimiento\Models\VisitasListaChequeo', 'key' => 'visita_listachequeo_item_id'],
        'user' => ['Backend\Models\User', 'key' => 'user_id']
    ];

    /**
     * Obtener el nombre del item asociado
     */
    public function getNombreItemAttribute()
    {
        return $this->item && $this->item->listachequeo_item 
            ? $this->item->listachequeo_item->nombre 
            : ($this->item ? $this->item->id : '');
    }
}
