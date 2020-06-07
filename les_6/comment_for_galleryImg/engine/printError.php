<?php
/**
 * Выводит сообщение об ошибке при несоответствии требованиям для загружаемого файла
 */
function printError () {
    $fileSize = DOWNLOAD_FILE_SIZE;
    $errorText = "Не соблюдены требования к загружаемому файлу: 
                            Разрешение jpeg, размер не более {$fileSize} kB";
    echo renderGalleryPage($errorText);
}