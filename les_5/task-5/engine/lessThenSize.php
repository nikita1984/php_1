<?php
/**
 * Проверяет на соответствие ограничениям по размеру файла
 * @param $filename - наименование проверяемого файла
 * @param $fileSizes - ограничение по размеру проверяемого файла в байтах
 * @return true - в случае не превышения допустимого размера файла
 */
function lessThenSize(string $filename, int $fileSizes) : bool {
      return (filesize($filename) <= $fileSizes);
  };

