<?php
$host = '127.0.0.1:3306';
$SQLLogin = 'admin';
$pwd = 'admin';
$db = 'gallery';
$sql = 'SELECT * from gallerytable';
$gallery = getGallery($host, $SQLLogin, $pwd, $db, $sql);
?>
<div class="gallery">
    <? foreach ($gallery as $key => $item): ?>
        <a href="<?=$item["href"]?>" target="_blank">
            <img class="miniIMG" src="<?=$item["smallImagePath"]?>" alt="<?=$item["name"]?>">
        </a>
    <? endforeach; ?>
</div>
