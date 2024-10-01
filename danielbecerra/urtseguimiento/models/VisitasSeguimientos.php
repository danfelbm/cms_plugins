<?php namespace DanielBecerra\UrtSeguimiento\Models;

use Model;

/**
 * Model
 */
class VisitasSeguimientos extends Model
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
    public $table = 'danielbecerra_urtseguimiento_visitas_seguimientos';

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
        'user' => ['Backend\Models\User', 'key' => 'user_id']
    ];

    public function getVisitasSeguimientosOptions($scopes)
    {
        // Verificar si el scope 'visita' está definido y tiene un valor
        if (!empty($scopes['visita']->value)) {
            $visitaId = $scopes['visita']->value;
            return self::where('visita_id', $visitaId)->pluck('fecha', 'id')->toArray();
        }

        // Retornar un array vacío si no hay un 'visita' definido
        return [];
    }

}

