<?php
$sql = 'SELECT * FROM gallerytable ORDER BY view';
$dbConfig = include CONFIG_DIR . 'db.php';
$gallery = getGallery($dbConfig['host'],
                        $dbConfig['login'],
                        $dbConfig['password'],
                        $dbConfig['dbName'],
                        $sql);
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