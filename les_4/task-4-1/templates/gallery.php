<?php 
$gallery = getGallery(IMAGES_DIR);
?>
<div class="gallery">
    <? foreach ($gallery as $item): ?>
        <a href="<?=$item?>" target="_blank"><img class="miniIMG" src="<?=$item?>" alt="Картинка галереи"></a>
    <? endforeach; ?>
</div>
