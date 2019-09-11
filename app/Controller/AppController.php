<?php
/**
 * Created by PhpStorm.
 * User: nassi
 * Date: 11/09/2019
 * Time: 20:03
 */

namespace App\Controller;
use App;
use Core\Controller\Controller;

class AppController extends Controller{

    protected $template = 'default';


    public function __construct(){
        $this->viewPath = ROOT . '/app/views/';
    }

    protected function loadModel($model_name){
        $this->$model_name = App::getInstance()->getTable($model_name);

    }

}