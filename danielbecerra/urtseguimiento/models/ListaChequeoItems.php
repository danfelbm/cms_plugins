<?php namespace DanielBecerra\UrtSeguimiento\Models;

use Model;

/**
 * Model
 */
class ListaChequeoItems extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'danielbecerra_urtseguimiento_listachequeo_items';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $belongsTo = [
        'listachequeo' => ['DanielBecerra\UrtSeguimiento\Models\ListaChequeo', 'key' => 'listachequeo_id']
    ];

}
