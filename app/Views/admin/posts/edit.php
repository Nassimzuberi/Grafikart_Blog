<?php
$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->update($_GET['id'], [
            'titre' => $_POST['titre'],
            'contenu' => $_POST['contenu'],
            'category_id' => $_POST['category_id']
    ]);
    if($result){
        ?>
<div class="alert alert-success">L'article a bien été ajouté </div>
<?php
    }

}
$categorie = App::getInstance()->getTable('Categorie')->extract('id','titre');
$post = $postTable->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($post);

?>

<form method="post">
    <?= $form->input('titre','Titre de l\'article'); ?>
    <?= $form->input('contenu', 'Contenu',['type' => 'textarea']); ?>
    <?= $form->select('category_id', 'Catégorie',$categorie); ?>
    <?= $form->submit(); ?>

</form>