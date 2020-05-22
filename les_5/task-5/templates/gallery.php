<?php
$sql = 'SELECT * FROM gallerytable ORDER BY view';
$gallery = getGallery(SQL_HOST, SQL_LOGIN, SQL_PWD, SQL_DB, $sql);
?>
<div class="gallery">
    <? foreach ($gallery as $item): ?>
        <figure>
            <a href="./photo.php?id=<?=$item["id"]?>">
                <img class="miniIMG" src="<?=$item["smallImagePath"]?>" alt="<?=$item["name"]?>">
            </a>
            <figcaption>Просмотры: <?=$item["view"]?> </figcaption>
        </figure>
    <? endforeach; ?>
</div>