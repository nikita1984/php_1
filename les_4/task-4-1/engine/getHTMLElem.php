<?php
/**
 * @param {array} $arr - массив с наименованиями файлов для вставки в HTML-код
 * @return string $gallery + HTML-код галереи
 */
function getHTMLElem($arr){
    $gallery = '';
    foreach ($arr as $item) {
            $file = getFilePath($item);
            $gallery .= "<a href=\"{$file}\" target=\"_blank\"><img class=\"miniIMG\" src=\"{$file}\" alt=\"Картинка галереи\"></a>";
        }
    return $gallery;
}
