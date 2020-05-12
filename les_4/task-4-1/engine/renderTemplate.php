<?php
function renderTemplate($page, $gallery = "", $uploadForm = "") {
    ob_start();
    include $page . ".php";    
    return ob_get_clean();
  }