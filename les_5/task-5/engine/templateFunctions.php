<?php
/**
 * Рендеринг низкоуровневых шаблонов
 * @page {string} наименование файла с шаблоном (без расширения)
 * @return string шаблон для вставки в переменную высокоуровневого шаблона
 */
function renderTemplate($page, $params = [])
{
    ob_start(); // Запускаем буфер памяти

    // проверка аргумента с массивом $params на значение не равное NULL, в случае успеха возвращаем через метод extract() в 
    // виде отдельных переменных ключи переменных массива $params
    if (!is_null($params)) {
        extract($params);
    }

    // Проверка на существование файла шаблона 
    // При успехе вставляем содержимое файла, при отказе кидаем текст ошибки
    if (file_exists($page . ".php")) {
        include $page . ".php";
    } else {
        die("Такой {$page} страницы не существует. 404");
    }

    return ob_get_clean(); // возвращаем содержимое буфера памяти, затем очищаем его
}
  
/**
 * Рендеринг высокоуровневого шаблона
 * @return string - отрисованная HTML-страница
 */
function renderGalleryPage()
{
    return renderTemplate(LAYOUTS_DIR . 'main',
        [
            'gallery' => renderTemplate(TEMPLATES_DIR . 'gallery'),
            // 'uploadForm' => renderTemplate(TEMPLATES_DIR . 'upload_form')
        ]
    );
}

function renderImagePage($imageFile, $imageView){
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'gallery' => renderTemplate(TEMPLATES_DIR . 'imagePage',
        [
            'gallery' => getFilePath ($imageFile, 'big'),
            'imageTitle' => $imageFile,
            'imageView' => $imageView
        ]
        ),
    ]
    );
}

