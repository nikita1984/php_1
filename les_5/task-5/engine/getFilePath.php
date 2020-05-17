<?php
/** Конструирует путь до файла в директории с изображениями
 * @param $fileName - имя файла в папке images/big
 * @param $sizeType - вариант типа файла (для миниатюр и для оригинальных изображений)
 * @return string - возвращает путь до файла в директории с оригинальными изображениями /images/big
 */
function getFilePath (string $fileName, string $sizeType) : string {
    $filePath = '';
    switch ($sizeType){
        case 'small':
            $filePath .= './images/small/';
            break;
        case 'big':
            $filePath .= './images/big/';
            break;
    }
    $filePath .= $fileName;
    return $filePath;
}

