<?php

?>

<h1><?= $categorie->titre; ?></h1>
    <div class="row">
        <div class="col-sm-8">
            <?php foreach($article as $post): ?>
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

                <?php foreach($category as $categories): ?>
                    <li><a href="<?= $categories->url; ?>"><?= $categories->titre; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>


