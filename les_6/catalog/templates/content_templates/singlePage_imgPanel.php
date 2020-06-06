<?php
$img = getFilePath($_GET['id'], 'singlePage-img');
?>
<!--SINGLE PAGE PANEL-->
<div class="single-page" style="background-image: url(<?= $img ?>)">
    <a href="#" class="arrow">
        <div class="angle"><i class="fas fa-angle-left"></i></div>
    </a>
    <a href="#" class="arrow">
        <div class="angle"><i class="fas fa-angle-right"></i></div>
    </a>
</div>
<!--SINGLE PAGE PANEL-->