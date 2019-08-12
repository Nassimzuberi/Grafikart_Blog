<ul>

<?php foreach($db->query('SELECT * FROM articles',('App\Table\Article')) as $post): ?>
<h2>
    <a href="<?= $post->url ; ?>"><?= $post->titre ; ?></a>
</h2>
<p><?= $post->extrait; ?></p>

<?php endforeach; ?>

</ul>
    <?php
    // $count = $pdo->exec('insert into articles SET titre = "Mon titre", date ="'.date('Y-m-d H:i:s').'"');

//var_dump($count);
