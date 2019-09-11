<?php

$posts = App::getInstance()->getTable('Post')->all();
$categorie = App::getInstance()->getTable('Categorie')->all();

?>
<h1>Administrer les articles</h1>
<p>
    <a href="?p=posts.add" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($posts as $post) : ?>
    <tr>
        <td><?= $post->id; ?></td>
        <td><?= $post->titre; ?></td>
        <td>
            <a class="btn btn-primary" href="?p=posts.edit&id=<?= $post->id; ?>">Editer</a>
            <form action="?p=posts.delete" method="post" style="display:inline;">
                <input type="hidden" name="id" value="<?= $post->id; ?>">
                <button type="submit" class="btn btn-danger" href="?p=posts.delete&id=<?= $post->id ; ?>" >Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>


</table>


<h1>Administrer les catégories</h1>
<p>
    <a href="?p=categorie.add" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($categorie as $categories) : ?>
        <tr>
            <td><?= $categories->id; ?></td>
            <td><?= $categories->titre; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=categorie.edit&id=<?= $categories->id; ?>">Editer</a>
                <form action="?p=categorie.delete" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $categories->id; ?>">
                    <button type="submit" class="btn btn-danger" href="?p=categorie.delete&id=<?= $categories->id ; ?>" >Supprimer</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>


</table>