<?php namespace DanielBecerra\UrtSeguimiento\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use Backend\Facades\BackendAuth;

class VisitasSeguimiento extends Controller
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
    }

    public function formExtendFields($form)
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

}

