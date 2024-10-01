<?php namespace DanielBecerra\Ajustes\Models;

use Model;

/**
 * Model
 */
class Estados extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'danielbecerra_ajustes_estados_items';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    /**
     * @var array belongsTo relationship.
     */
    public $belongsTo = [
        'estados_categorias' => ['DanielBecerra\Ajustes\Models\EstadosCategorias', 'key' => 'estados_categorias_id']
    ];

    public function getEstadosVisitasItemsChequeo()
    {
        // Obtiene los estados donde estados_categorias_id es 3
        return $this->where('estados_categorias_id', 3)->lists('nombre', 'id');
    }
}
