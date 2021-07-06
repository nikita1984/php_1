<?php
// 6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
// Необходимо представить пункты меню как элементы массива и вывести их циклом.
// Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.

/* Решение */
// Создадим массив меню
$menu = [
    [
        "title" => "Меню1",
        "href" => "#"
    ],
    [
        "title" => "Меню2",
        "href" => "#",
        "subitems" => [
            [
            "title" => "Меню2a",
            "href" => "#",
            ],
            [
            "title" => "Меню2b",
            "href" => "#",
            "subitems" => [
                [
                    "title" => "Меню2b+",
                    "href" => "#",
                ]
            ]
            ],
        ]
    ],
    [
        "title" => "Меню3",
        "href" => "#"
    ],
    [
        "title" => "Меню4",
        "href" => "#"
    ]
]; 


/**
 * функция компиляции меню
 * @param {array} menuArray массив с данным о меню
 * @returns {HTML-Elem} output возвращает результат вёрстки меню
 */  
function getMenu (array $menuArray) {
    $output = "<ul>";    
    foreach ($menuArray as $item){
            $output .= "<li><a href=\"{$item["href"]}\">{$item["title"]}</a>";
            if(isset($item["subitems"])) {
                $output .= getMenu ($item["subitems"]);
            }
            $output .= "</li>";            
        }                     
    $output .= "</ul>";
    return $output;
}
// Объявим переменную меню для вставки в шаблон и присвоим ей результат функции renderMenu($menuArray)
$menu = getMenu($menu);
// Вставим шаблон страницы с переменной меню
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<meta charset="UTF-8">
</head>
<body>
<?=$menu?>
</body>
</html>
