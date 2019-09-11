<?php
$categorieTable = App::getInstance()->getTable('Categorie');
if(!empty($_POST)){
    $result = $categorieTable->create([
            'titre' => $_POST['titre'],
    ]);
    if($result){
        header('location: admin.php?p=categorie.edit&id=' . App::getInstance()->getDb()->lastInsertId());
    }

}
$form = new \Core\HTML\BootstrapForm($_POST);

?>

<form method="post">
    <?= $form->input('titre','Titre de la catégorie'); ?>
    <?= $form->submit(); ?>

</form>