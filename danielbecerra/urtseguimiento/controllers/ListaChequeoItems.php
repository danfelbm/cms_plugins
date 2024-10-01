<?php namespace DanielBecerra\UrtSeguimiento\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class ListaChequeoItems extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'ver_lista_chequeo' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('DanielBecerra.UrtSeguimiento', 'main-menu-item', 'side-menu-listachequeo');
    }

}
