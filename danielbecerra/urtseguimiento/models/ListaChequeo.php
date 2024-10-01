<?php namespace DanielBecerra\UrtSeguimiento\Models;

use Model;
use October\Rain\Database\Traits\Sortable;
use \October\Rain\Database\Traits\SimpleTree;

/**
 * Model
 */
class ListaChequeo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use SimpleTree;
    use Sortable;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'danielbecerra_urtseguimiento_listachequeo';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    /**
     * @var array belongsTo relationship to refer to itself (parent_id)
     */
    public $belongsTo = [
        'parent' => ['DanielBecerra\UrtSeguimiento\Models\ListaChequeo', 'key' => 'parent_id']
    ];

    public $hasMany = [
        'items' => ['DanielBecerra\UrtSeguimiento\Models\ListaChequeoItems', 'key' => 'listachequeo_id'],
        'listachequeo' => ['DanielBecerra\UrtSeguimiento\Models\ListaChequeo', 'key' => 'id'] // borrar jajaja
    ];

}
