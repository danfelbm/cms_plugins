<?php namespace DanielBecerra\UrtSeguimiento\Models;

use Model;

/**
 * Model
 */
class Sedes extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'danielbecerra_urtseguimiento_sedes';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    /**
     * @var array belongsTo relationship.
     */
    public $belongsTo = [
        'ciudad' => ['DanielBecerra\Ajustes\Models\Ciudades', 'key' => 'ciudad_id'],
        'departamento' => ['DanielBecerra\Ajustes\Models\Departamentos', 'key' => 'departamento_id']
    ];

}
