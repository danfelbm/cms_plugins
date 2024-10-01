<?php namespace DanielBecerra\Ajustes\Models;

use Model;
use October\Rain\Database\Traits\Sortable;
use \October\Rain\Database\Traits\SimpleTree;

/**
 * Model
 */
class EstadosCategorias extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use SimpleTree;
    use Sortable;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'danielbecerra_ajustes_estados_categorias';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    /**
     * @var array belongsTo relationship.
     */
    public $belongsTo = [
        'parent' => ['DanielBecerra\Ajustes\Models\EstadosCategorias', 'key' => 'parent_id']
    ];

}
