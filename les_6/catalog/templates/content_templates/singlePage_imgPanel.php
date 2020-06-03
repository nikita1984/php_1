<?php
$fileName = '1.jpg';
$img = getFilePath ($fileName, 'big');
//ToDo Реализовать отображение фото через запрос к БД
?>
<!--SINGLE PAGE PANEL-->
<div class="single-page" style="background-image: url(<?=$img ?>)">
    <a href="#" class="arrow">
        <div class="angle"><i class="fas fa-angle-left"></i></div>
    </a>
    <a href="#" class="arrow">
        <div class="angle"><i class="fas fa-angle-right"></i></div>
    </a>
</div>
<!--SINGLE PAGE PANEL-->