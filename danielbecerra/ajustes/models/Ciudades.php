<?php namespace DanielBecerra\Ajustes\Models;

use Model;

/**
 * Model
 */
class Ciudades extends Model
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
    public $table = 'danielbecerra_ajustes_ciudades';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    /**
     * @var array belongsTo relationship.
     */
    public $belongsTo = [
        'departamento' => ['DanielBecerra\Ajustes\Models\Departamentos', 'key' => 'departamento_id']
    ];

}
