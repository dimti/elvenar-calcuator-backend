<?php namespace Dimti\Elvenar\Controllers;

use Backend\Behaviors\FormController;
use Backend\Behaviors\ListController;
use Backend\Behaviors\RelationController;
use Backend\Classes\Controller;
use BackendMenu;

class UserProfiles extends Controller
{
    public $implement = [
        ListController::class,
        FormController::class,
        RelationController::class,
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dimti.Elvenar', 'elvenar', 'user_profiles');
    }
}
