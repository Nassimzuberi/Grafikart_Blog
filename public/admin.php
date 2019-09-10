<?php
use Core\Auth\DbAuth;
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

$auth = new DbAuth($app->getDb());

if(!$auth->logged()){
    $app->forbidden();
}
if($page === 'home'){
    require ROOT . '/pages/admin/posts/index.php';
}elseif($page === 'posts.edit'){
    require ROOT . '/pages/admin/posts/edit.php';

}elseif($page === 'posts.add'){
    require ROOT . '/pages/admin/posts/add.php';

}elseif($page === 'posts.delete'){
require ROOT . '/pages/admin/posts/delete.php';

}
elseif($page === 'categorie.edit'){
    require ROOT . '/pages/admin/categorie/edit.php';

}elseif($page === 'categorie.add'){
    require ROOT . '/pages/admin/categorie/add.php';

}elseif($page === 'categorie.delete'){
    require ROOT . '/pages/admin/categorie/delete.php';

}

$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';