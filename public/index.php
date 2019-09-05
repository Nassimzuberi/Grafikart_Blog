<?php
define('ROOT',dirname(__DIR__));
require ROOT . '/app/App.php';

App::load();

$app = App::getInstance();



if(isset($_GET['page'])){
    $page = $_GET['page'];
} else{
    $page = 'home';
}

if($page === 'home'){
    require ROOT . '/pages/articles/home.php';
}
ob_start();
$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';