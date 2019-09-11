<?php
define('ROOT',dirname(__DIR__));
require ROOT . '/app/App.php';

App::load();

$app = App::getInstance();

ob_start();

if(isset($_GET['p'])){
    $page = $_GET['p'];
} else{
    $page = 'home';
}


if($page === 'home'){
    $controller = new \App\Controller\PostController();
    $controller->index();
}elseif($page === 'articles.categorie'){
    $controller = new \App\Controller\PostController();
    $controller->categories();

}elseif($page === 'articles.show'){
    $controller = new \App\Controller\PostController();
    $controller->show();

}elseif($page === 'login'){
    $controller = new \App\Controller\UsersController();
    $controller->login();

}

$content = ob_get_clean();
require ROOT . '/app/Views/templates/default.php';