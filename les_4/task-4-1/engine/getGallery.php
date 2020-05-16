<?php
/** Возвращает HTML-код блока галереи фотографий
 * @param $directoryPath - путь к папке с файлами изображений блока галереи
 * @return string HTML-код блока галереи
 */
function getGallery (string $directoryPath) : string {
    $a = [];
    foreach (scandir($directoryPath) as $item) {

        if (!is_dir($item)){
            $file = getFilePath($item);
            $fileSizes = 20000;
            if (isJPG($file) && lessThenSize($file, $fileSizes)) {
                array_push($a, $file);
            }
        }
    };
    return getHTMLElem($a);
};
