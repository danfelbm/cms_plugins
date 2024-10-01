<?php namespace DanielBecerra\Ajustes\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class EstadosCategorias extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'Gestionar ajustes' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('DanielBecerra.Ajustes', 'main-menu-ajustes', 'side-menu-item');
    }

    public function listExtendQuery($query)
    {
        $query->with('parent');
    }

}
