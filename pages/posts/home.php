
<div class="row">
    <div class="col-sm-8">
        <?php foreach(App::getInstance()->getTable('Post')->last() as $post): ?>
            <h2>
                <a href="<?= $post->url ; ?>"><?= $post->titre ; ?></a>
            </h2>
            <p> <em>
                    <?= $post->categorie; ?>
                </em></p>
            <p><?= $post->extrait; ?></p>

        <?php endforeach; ?>
    </div>
    <div class="col-sm-4">
    <ul>

         <?php foreach(App::getInstance()->getTable('Categorie')->all() as $categories): ?>
            <li><a href="<?= $categories->url; ?>"><?= $categories->titre; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

</div>



    <?php
    // $count = $pdo->exec('insert into articles SET titre = "Mon titre", date ="'.date('Y-m-d H:i:s').'"');

//var_dump($count);
