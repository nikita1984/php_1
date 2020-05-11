<?php
/** проверяет на соостветствие входного файла формату jpeg
 * @param {string} fileName - имя проверяемого файла
 * @return {boolean} true в случае соответствия
 */
function is_jpg($filename){
    if (exif_imagetype ($filename) === 2){
      return true; 
    } else {
      return false;
    }
}

