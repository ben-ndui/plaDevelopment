<?php


namespace SmoothDesign\Controller\Admin;


use App;
use Core\Auth\DbAuth;

class AppController extends \SmoothDesign\Controller\AppController {

    protected $template = 'default';

    public function __construct(){
        parent::__construct();
        // AUTH
        $app = App::getInstance();
        $auth = new DbAuth($app->getDb());

        if (!$auth->logged()) {
            $this->forbidden();
        }
        $this->viewpath = ROOT . '/app/Views/';
    }

    protected function loadModel($model_name){
        $this->$model_name = App::getInstance()->getTable($model_name);
    }

}