<?php
$form_title = "Загрузка файлов";
?>
<h2 class="gallery"><?=$form_title?></h2>
<p class="gallery"><?=$errorText?></p>
<form class="gallery" action="" enctype="multipart/form-data" method="post">
    <input type="file" name = 'my_file'>
    <input type="submit">      
</form>