<?php
/** проверяет на соостветствие входного файла формату jpeg
 * @param  $filename - имя проверяемого файла
 * @return bool в случае соответствия
 */
function isJPG(string $filename) : bool {
      return (exif_imagetype ($filename) === 2);
}

