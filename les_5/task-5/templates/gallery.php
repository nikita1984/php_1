<?php 
$gallery = getGallery(IMAGES_DIR);
?>
<div class="gallery">
    <? foreach ($gallery as $key => $item): ?>
        <a href="<?=$item["href"]?>" target="_blank"><img class="miniIMG" src="<?=$item["small"]?>" alt="<?=$item["alt"]?>"></a>
    <? endforeach; ?>
</div>
