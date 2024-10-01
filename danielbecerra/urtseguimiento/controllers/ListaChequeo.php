<?php namespace DanielBecerra\UrtSeguimiento\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class ListaChequeo extends Controller
{
    public $implement = [
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';
    
    public $requiredPermissions = [
        'ver_lista_chequeo' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('DanielBecerra.UrtSeguimiento', 'main-menu-item', 'side-menu-listachequeo');
    }

    public function listExtendQuery($query)
    {
        $query->with('parent');
    }

}
