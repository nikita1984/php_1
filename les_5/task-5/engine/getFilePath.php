<?php
/** Конструирует путь до файла в директории с миниатюрами /images/small
 * @param $fileName - имя файла в папке images
 * @return string - возвращает путь до файла в директории с изображениями /images/small
 */
function getFilePath (string $fileName) : string {
    $filePath = '';
    $filePath .= './images/small/';
    $filePath .= $fileName;
    return $filePath;
}

