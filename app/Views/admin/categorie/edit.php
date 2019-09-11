<?php
$categorieTable = App::getInstance()->getTable('Categorie');
if(!empty($_POST)){
    $result = $categorieTable->update($_GET['id'], [
            'titre' => $_POST['titre']
    ]);
    if($result){
        ?>
<div class="alert alert-success">La catégorie a bien été ajouté </div>
<?php
    }

}
$categorie = $categorieTable->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($categorie);

?>

<form method="post">
    <?= $form->input('titre','Titre de la catégorie'); ?>
    <?= $form->submit(); ?>

</form>