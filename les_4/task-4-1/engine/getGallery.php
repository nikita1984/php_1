<?php
/** Возвращает HTML-код блока галереи фотографий
 * @param {string} directoryPath - путь к папке с файлами изображений блока галереи
 * @return {string} HTML-код блока галереи
 */
function getGallery ($directoryPath) {
    $directoryList = scandir($directoryPath);    
    return getHTMLElem($directoryList);
};
