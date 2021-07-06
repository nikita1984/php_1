<?php
// Устанавливаем "строгий" режим
declare(strict_types=1);
define("DOCUMENT_ROOT", __DIR__ . "/../");
define("CONFIG_DIR", DOCUMENT_ROOT . "config/");
define("ENGINE_DIR", DOCUMENT_ROOT . "engine/");
// define("IMAGES_DIR", DOCUMENT_ROOT . "public/images/small/");
// define("BIG_IMAGES_DIR", DOCUMENT_ROOT . "public/images/big/");
// define("DOWNLOAD_FILE_SIZE", 40000);
define("TEMPLATES_DIR", DOCUMENT_ROOT .'templates/');
define("CONTENTS_DIR", TEMPLATES_DIR .'content_templates/');
define("LAYOUTS_DIR", TEMPLATES_DIR . 'layouts/');
define("RENDER_TEMPLATES", '<i class="fas fa-star rat"></i>');

function requireFunctions($arr){
    foreach ($arr as $item) {
        if (!is_dir($item)){          
            require ENGINE_DIR . $item;                
        }    
    };
  };