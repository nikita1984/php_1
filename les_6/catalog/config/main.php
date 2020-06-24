<?php
// Устанавливаем "строгий" режим
declare(strict_types=1);

// Объявляем константы
define("DOCUMENT_ROOT", __DIR__ . "/../");
define("CONFIG_DIR", DOCUMENT_ROOT . "config/");
define("ENGINE_DIR", DOCUMENT_ROOT . "engine/");
define("TEMPLATES_DIR", DOCUMENT_ROOT .'templates/');
define("CONTENTS_DIR", TEMPLATES_DIR .'content_templates/');
define("HEADER_DIR", TEMPLATES_DIR .'header_templates/');
define("LAYOUTS_DIR", TEMPLATES_DIR . 'layouts/');

function requireFunctions($arr){
    foreach ($arr as $item) {
        if (!is_dir($item)){          
            require ENGINE_DIR . $item;                
        }    
    };
  };