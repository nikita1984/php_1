<?php
$form_title = "Загрузка файлов";

downLoadUserFile();
// В случае несоответствия требования к загружаемому файлу, формируем переменную с текстом ошибки
if (!downLoadUserFile()  && !is_null(downLoadUserFile())){
    $fileSize = DOWNLOAD_FILE_SIZE;
    $errorText = "Не соблюдены требования к загружаемому файлу: Разрешение jpeg, размер не более {$fileSize} kB";
}
?>
<h2 class="gallery"><?=$form_title?></h2>
<p class="gallery"><?=$errorText?></p>
<form class="gallery" action="" enctype="multipart/form-data" method="post">
    <input type="file" name = 'my_file'>
    <input type="submit">      
</form>