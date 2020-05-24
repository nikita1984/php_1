<?php
$sql = 'SELECT * FROM gallerytable ORDER BY view';
$gallery = queryAll($sql, 'All');
closeConnection ();
?>
<div class="gallery">
    <? foreach ($gallery as $item): ?>
        <figure>
            <a href="./photo.php?id=<?= $item["id"] ?>">
                <img class="miniIMG" src="<?= $item["smallImagePath"] ?>" alt="<?= $item["name"] ?>">
            </a>
            <figcaption>Просмотры: <?= $item["view"] ?> </figcaption>
        </figure>
    <? endforeach; ?>
</div>