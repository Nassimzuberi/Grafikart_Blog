<?php

if(!empty($_POST)){
    $auth = new \Core\Auth\DbAuth(App::getInstance()->getDb());
    if($auth->login($_POST['username'],$_POST['password'])){
        header('location: admin.php');
    }else{
        ?>
<div class="alert alert-danger">
    Identifiants incorrect
</div>
<?php
    }
}
$form = new \Core\HTML\BootstrapForm($_POST);

?>

<form method="post">
    <?= $form->input('username','Pseudo'); ?>
    <?= $form->input('password', 'Mot de passe',['type' => 'password']); ?>
    <?= $form->submit(); ?>

</form>