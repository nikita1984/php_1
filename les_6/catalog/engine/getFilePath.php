<?php
/** Конструирует путь до файла в директории с оригинальными изображениями /images/
 * @param $fileTitle - наименование файла (без указания расширения)
 * @param $sizeType - вариант типа файла (для миниатюр и для оригинальных изображений)
 * @return string - возвращает путь до файла в директории с оригинальными изображениями /images/
 */
function getFilePath (int $fileTitle, string $sizeType) : string {
    $filePath = '';
    switch ($sizeType){
        case 'small':
            $filePath .= './img/catalog-img/';
            break;
        case 'big':
            $filePath .= './img/singlePage-img/';
            break;
    }
    $filePath .= $fileTitle;
    $filePath .= '.jpg';
    return $filePath;
}

