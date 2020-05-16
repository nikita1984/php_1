<?php
/** Возвращает HTML-код блока галереи фотографий
 * @param $directoryPath - путь к папке с файлами изображений блока галереи
 * @return string HTML-код блока галереи
 */
function getGallery (string $directoryPath) : string {
    $directoryList = scandir($directoryPath);    
    return getHTMLElem($directoryList);
};
