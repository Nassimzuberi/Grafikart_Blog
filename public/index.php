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
    require ROOT . '/pages/posts/home.php';
}elseif($page === 'articles.categorie'){
    require ROOT . '/pages/posts/categorie.php';

}elseif($page === 'articles.show'){
    require ROOT . '/pages/posts/single.php';

}

$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';