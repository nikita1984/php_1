<?php
/**
 * @param {array} $arr - массив с путем до файлов для вставки в HTML-код
 * @return string $gallery + HTML-код галереи
 */
function getHTMLElem($arr){
    $gallery = '';
    foreach ($arr as $item) {
            $gallery .= "<a href=\"{$item}\" target=\"_blank\"><img class=\"miniIMG\" src=\"{$item}\" alt=\"Картинка галереи\"></a>";
        }
    return $gallery;
}
