<?php
$imgPanel = renderTemplate(CONTENTS_DIR . 'singlePage_imgPanel');
$description = renderTemplate(CONTENTS_DIR . 'singlePage_description');
$likeAlso = renderTemplate(CONTENTS_DIR . 'singlePage_likeAlso');
?>
<div class="top">
    <?= $imgPanel ?>
    <?= $description ?>
    <?= $likeAlso ?>
</div>
