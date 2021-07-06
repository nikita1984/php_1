<?php
/** Конструирует путь до файла в директории с оригинальными изображениями /images/
 * @param $fileTitle - наименование файла (без указания расширения)
 * @param $directoryName - наименование директории в которой находиться запрашиваемый файл
 * @return string - возвращает путь до файла в директории с оригинальными изображениями /images/
 */
function getFilePath (int $fileTitle, string $directoryName) : string {
    $filePath = "./images/{$directoryName}/";
    $filePath .= $fileTitle;
    $filePath .= '.jpg';
    return $filePath;
}

