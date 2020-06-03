<?php
/** Конструирует путь до файла в директории с оригинальными изображениями /images/
 * @param $fileName - имя файла в папке images/big или  images/small
 * @param $sizeType - вариант типа файла (для миниатюр и для оригинальных изображений)
 * @return string - возвращает путь до файла в директории с оригинальными изображениями /images/
 */
function getFilePath (string $fileName, string $sizeType) : string {
    $filePath = '';
    switch ($sizeType){
        case 'small':
            $filePath .= './images/small/';
            break;
        case 'big':
            $filePath .= './img/singlePage-img/';
            break;
    }
    $filePath .= $fileName;
    return $filePath;
}

