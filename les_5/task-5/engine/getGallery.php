<?php
/** Возвращает массив с путем файлов галереи для вставки в HTML-код
 * @param $directoryPath - путь к папке с файлами изображений блока галереи
 * @return array массив с путем файлов галереи для вставки в HTML-код
 */
function getGallery (string $directoryPath) : array {
    $directoryList = [];
    foreach (scandir($directoryPath) as $item) {
        if (!is_dir($item)){
            $file = [
                "small" => getSmallFilePath($item),
                "big" => getBigFilePath($item),
                "alt" => "$item"
            ];
            $fileSizes = DOWNLOAD_FILE_SIZE;
            if (isJPG($file["big"]) && lessThenSize($file["big"], $fileSizes)) {
                array_push($directoryList, $file);
            }
        }
    };
    return $directoryList;
};
