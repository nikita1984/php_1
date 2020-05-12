<?php
function getHTMLElem($arr){
    $gallery = '';
    foreach ($arr as $item) {
        if (!is_dir($item)){            
            $file = getFilePath($item);
            $fileSizes = 20000;
            if (is_jpg($file) && lessThenSize($file, $fileSizes)) {
                $gallery .= "<a href=\"{$file}\" target=\"_blank\"><img class=\"miniIMG\" src=\"{$file}\" alt=\"Картинка галереи\"></a>";   
            }         
        }    
    };
    return $gallery;
};
