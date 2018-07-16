<?php namespace Mrhili\Asociations\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Kafa2a extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Mrhili.Asociations', 'main-menu-item4');
    }
}
