<?php
/** Возвращает HTML-код блока галереи фотографий
 * @param $directoryPath - путь к папке с файлами изображений блока галереи
 * @return array массив с путем файлов галереи для вставки в HTML-код
 */
function getGallery (string $directoryPath) : array {
    $directoryList = [];
    foreach (scandir($directoryPath) as $item) {
        if (!is_dir($item)){
            $file = getFilePath($item);
            $fileSizes = 20000;
            if (isJPG($file) && lessThenSize($file, $fileSizes)) {
                array_push($directoryList, $file);
            }
        }
    };
    return $directoryList;
};
