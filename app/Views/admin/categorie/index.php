

<h1>Administrer les catégories</h1>
<p>
    <a href="?p=admin.categorie.add" class="btn btn-success">Ajouter</a>
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
                <a class="btn btn-primary" href="?p=admin.categorie.edit&id=<?= $categories->id; ?>">Editer</a>
                <form action="?p=admin.categorie.delete" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $categories->id; ?>">
                    <button type="submit" class="btn btn-danger" >Supprimer</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>


</table>