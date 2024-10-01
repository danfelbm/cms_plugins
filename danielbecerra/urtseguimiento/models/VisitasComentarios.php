<?php namespace DanielBecerra\UrtSeguimiento\Models;

use Model;

/**
 * Model
 */
class VisitasComentarios extends Model
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
    public $table = 'danielbecerra_urtseguimiento_visitas_comentarios';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
