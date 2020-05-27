<?php
/** Записывает строку в заданный файл
 * @param $filePath - путь до целевого файла в который будет производиться запись
 * @param $writeString - строка, которая будет записана в файл
 */
function writeStringInFile (string $filePath, string $writeString)
{
$openFile = fopen($filePath, 'ab');
fwrite($openFile, $writeString);
fclose($openFile);
}