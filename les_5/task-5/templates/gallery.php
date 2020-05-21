<?php
$host = '127.0.0.1:3306';
$user = 'admin';
$pwd = 'admin';
$db = 'gallery';
$gallery = getGallery();
// $gallery = getSQLGallery();
?>
<div class="gallery">
    <? foreach ($gallery as $key => $item): ?>
        <a href="<?=$item["href"]?>" target="_blank"><img class="miniIMG" src="<?=$item['smallImagePath']?>" alt="<?=$item["name"]?>"></a>
    <? endforeach; ?>
</div>
