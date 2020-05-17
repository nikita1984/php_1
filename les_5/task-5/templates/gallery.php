<?php 
$gallery = getGallery(IMAGES_DIR);
?>
<div class="gallery">
    <? foreach ($gallery as $item): ?>
        <a href="<?=$item["big"]?>" target="_blank"><img class="miniIMG" src="<?=$item["small"]?>" alt="<?=$item["alt"]?>"></a>
    <? endforeach; ?>
</div>
