<?php
define("DOCUMENT_ROOT", __DIR__ . "/../");
define("ENGINE_DIR", DOCUMENT_ROOT . "engine/");
define("IMAGES_DIR", DOCUMENT_ROOT . "public/images/small/");
define("BIG_IMAGES_DIR", DOCUMENT_ROOT . "public/images/big/");
define("DOWNLOAD_FILE_SIZE", 20000);
define("TEMPLATES_DIR", DOCUMENT_ROOT .'templates/');
define("LAYOUTS_DIR", TEMPLATES_DIR . 'layouts/');
define("SQL_HOST", '127.0.0.1:3306');
define("SQL_LOGIN", 'admin');
define("SQL_PWD", 'admin');
define("SQL_DB", 'gallery');

function requireFunctions($arr){
    foreach ($arr as $item) {
        if (!is_dir($item)){          
            require ENGINE_DIR . $item;                
        }    
    };
  };