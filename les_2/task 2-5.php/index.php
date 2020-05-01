<?
function renderTemplate($page, $menu = "", $content = "") {
    ob_start();
    include $page . ".php";    
    return ob_get_clean();
}

$menu = renderTemplate('menu');
$content = renderTemplate('about');

echo renderTemplate('main', $menu, $content);
