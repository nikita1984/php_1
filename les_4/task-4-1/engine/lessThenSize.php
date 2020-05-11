<?php
function lessThenSize($filename, $fileSizes){  
    if (filesize($filename) <= $fileSizes) {
      return true; 
    } else {
      return false;
    }
  };

