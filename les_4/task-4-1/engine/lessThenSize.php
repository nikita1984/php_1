<?php
/**
 * Проверяет на соответствие ограничениям по размеру файла
 * @param {string} $filename - наименование проверяемого файла
 * @param {int} $fileSizes - ограничение по размеру проверяемого файла в байтах
 * @return {boolean} true - в случае не превышения допустимого размера файла
 */
function lessThenSize($filename, $fileSizes){  
    if (filesize($filename) <= $fileSizes) {
      return true; 
    } else {
      return false;
    }
  };

