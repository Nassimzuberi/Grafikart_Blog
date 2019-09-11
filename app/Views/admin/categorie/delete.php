<?php
$categorieTable = App::getInstance()->getTable('Categorie');
if(!empty($_POST)){
    $result = $categorieTable->delete($_POST['id']);
    if($result){
        header('location: admin.php');
    }

}
