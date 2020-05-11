<?php
/** конструирует путь до файла в директории с изображениями /images/
 * @param {string} fileName - имя файла в папке images
 * @return {string} filePath - возвращает путь до файла в директории с изображениями /images/
 */
function getFilePath ($fileName){
    $filePath = '';
    $filePath .= 'images/';
    $filePath .= $fileName;
    return $filePath;
};

