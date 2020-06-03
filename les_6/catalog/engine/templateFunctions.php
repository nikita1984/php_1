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

function renderContent(string $contentTemplate, array $contentParams = []) {
    return renderTemplate(CONTENTS_DIR . $contentTemplate, $contentParams);
}

function getTemplateParams ($item) {
    if (is_array($item)) {
        $params = array_map('getTemplateParams', $item['params']);
        return renderContent($item['template'], $params);
    } else {
        return renderContent($item);
    }
}

/** Многократно рендерит один и тот-же шаблон
 * @param $count - число раз, которое будет срендерен шаблон
 * @param $template - шаблон для многократного рендеринга
 * @return string Срендеренный шаблон для вставки в HTML-код
 */
function multiRender (int $count, string $template) {
    $output = '';
    for ($i = 1; $i <= $count; $i++ ) {
        $output .= $template;
    }
    return $output;
}

/**
 * Рендеринг высокоуровневого шаблона
 * @return string - отрисованная HTML-страница
 */
function renderPage(string $title, string $contentTemplate, array $contentParams = [])
{
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'title' => $title,
        'header' => renderTemplate(TEMPLATES_DIR . 'header'),
        'navigation' => renderTemplate(TEMPLATES_DIR . 'navigation'),
        'breadcrumbs' => renderTemplate(TEMPLATES_DIR . 'breadcrumbs'),
        'content' =>  renderContent($contentTemplate, $contentParams),
        'subscribePanel' => renderTemplate(TEMPLATES_DIR . 'subscribePanel'),
        'footer' => renderTemplate(TEMPLATES_DIR . 'footer'),
        'footerSocial' => renderTemplate(TEMPLATES_DIR . 'footerSocial')
    ]);
}
