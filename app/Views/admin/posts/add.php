<form method="post">
    <?= $form->input('titre','Titre de l\'article'); ?>
    <?= $form->input('contenu', 'Contenu',['type' => 'textarea']); ?>
    <?= $form->select('category_id', 'Catégorie',$categorie); ?>
    <?= $form->submit(); ?>

</form>