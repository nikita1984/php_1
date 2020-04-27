<?php
$title = 'Главная страница - страница обо мне';
$h1title = "Информация обо мне";
$description = 'Краткая биография обо мне
    Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
    На данный момент работаю ведущим инженером в крупной авиакомпании.
    Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными
    фотографиями на эту тему';
$image = '../aviator.jpg';
$date = 2018;

$content = file_get_contents("main.tmpl");

$content = str_replace("{{ TITLE }}", $title, $content);
$content = str_replace("{{ H1-TITLE }}", $h1title, $content);
$content = str_replace("{{ DESCRIPTION }}", $description, $content);
$content = str_replace("{{ IMAGE }}", $image, $content);
$content = str_replace("{{ DATE }}", $date, $content);

echo $content;