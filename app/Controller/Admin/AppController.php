<?php
/**
 * Created by PhpStorm.
 * User: nassi
 * Date: 11/09/2019
 * Time: 20:03
 */

namespace App\Controller\Admin;
use \App;
use \Core\Auth\DbAuth;

class AppController extends \App\Controller\AppController{

    public function __construct()
    {
        parent::__construct();
        $app = App::getInstance();
        $auth = new DbAuth($app->getDb());

        if(!$auth->logged()){
            $this->forbidden();
        }
    }
}