<?php
/** Конструирует путь до файла в директории с миниатюрами /images/small
 * @param $fileName - имя файла в папке images
 * @return string - возвращает путь до файла в директории с изображениями /images/small
 */
function getSmallFilePath (string $fileName) : string {
    $filePath = '';
    $filePath .= './images/small/';
    $filePath .= $fileName;
    return $filePath;
}

/** Конструирует путь до файла в директории с оригинальными изображениями /images/big
 * @param $fileName - имя файла в папке images
 * @return string - возвращает путь до файла в директории с оригинальными изображениями /images/big
 */
function getBigFilePath (string $fileName) : string {
    $filePath = '';
    $filePath .= './images/big/';
    $filePath .= $fileName;
    return $filePath;
}

