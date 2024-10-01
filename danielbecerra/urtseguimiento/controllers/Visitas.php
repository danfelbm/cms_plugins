<?php namespace DanielBecerra\UrtSeguimiento\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use Backend\Facades\BackendAuth;
use October\Rain\Form\FormField;
use Event;

class Visitas extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\RelationController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';
    
    public $requiredPermissions = [
        'programar_visita',
        'reasignar_visita'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('DanielBecerra.UrtSeguimiento', 'main-menu-item', 'menu-visitas');

        Event::listen('backend.form.extendFields', function ($widget) {
            // Verificar si el modelo es 'VisitasCompromisos'
            if ($widget->model instanceof \DanielBecerra\UrtSeguimiento\Models\VisitasCompromisos) {
                // Obtener el usuario actual del backend
                $user = BackendAuth::getUser();

                // Verificar si es un nuevo registro
                if (!$widget->model->exists) {
                    $widget->model->user = BackendAuth::getUser()->id;
                }

                // Aplicar la lógica de 'reasignar_visita'
                if ($user->hasAccess('reasignar_visita')) {
                    $widget->getField('user')->readOnly = false;
                } else {
                    $widget->getField('user')->readOnly = true;
                }
            }
        });
    }

    public function formExtendFields($form) //borrar
    {
        // Obtener el usuario actual del backend
        $user = BackendAuth::getUser();

        // Verificar si el formulario está siendo creado o actualizado
        if (!$form->model->exists) {
            // Establecer un valor predeterminado para el campo 'user' si es necesario
            $form->model->user = BackendAuth::getUser()->id;
        }

        // Verificar si el usuario tiene el permiso 'reasignar_visita'
        if ($user->hasAccess('reasignar_visita')) {
            // Si el usuario tiene el permiso, permitir la edición del campo
            $form->getField('user')->readOnly = false;
        } else {
            // Si el usuario no tiene el permiso, hacer el campo de solo lectura
            $form->getField('user')->readOnly = true;
        }

    }


    // Añadir este nuevo método
    public function relationExtendRefreshResults($field)
    {
        // Asegurarse de que estamos trabajando con el campo correcto
        if ($field !== 'visitasSeguimiento') {
            return;
        }

        // Obtener el modelo actual
        $model = $this->formGetModel();
        
        // Verificar si hay algún "visitasSeguimiento" relacionado
        $hasSeguimientos = $model->visitasSeguimiento()->count() > 0;

        // Definir la lógica para agregar o quitar display:none
        $script = '';
        if ($hasSeguimientos) {
            // Si hay seguimientos, mostrar todos los elementos no activos
            $script = "<style>
                .display-control li:not(.active) { display: block !important; }
            </style>";
        } else {
            // Si no hay seguimientos, ocultar todos los elementos
            $script = "<style>
                .display-control li:not(.active) { display: none !important; }
            </style>";
        }

        // Devolver el script directamente sin necesidad de un elemento específico para la inyección
        return ['#has-seguimientos' => $script];
    }

}
