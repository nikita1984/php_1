<?php
/** конструирует путь до файла в директории с изображениями /images/
 * @param $fileName - имя файла в папке images
 * @return string - возвращает путь до файла в директории с изображениями /images/
 */
function getFilePath (string $fileName) : string {
    $filePath = '';
    $filePath .= './images/';
    $filePath .= $fileName;
    return $filePath;
}

