<?php
// ToDo Доработать реализацию рендеринга шаблонов через формулы рендеринга

// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';


// Подключаем файлы с функциями
require ENGINE_DIR . 'getFilePath.php';
require ENGINE_DIR . 'is_jpg.php';
require ENGINE_DIR . 'lessThenSize.php';
require ENGINE_DIR . 'getHTMLElem.php';
require ENGINE_DIR . 'getGallery.php';
// require ENGINE_DIR . 'renderingFunctions.php';

// Определяем переменные для построения шаблона
$gallery = getGallery(IMAGES_DIR);
$form_title = "Загрузка файлов";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_FILES['my_file'])) {
      if(!file_exists(IMAGES_DIR)) {
          mkdir(IMAGES_DIR);
      }
      $file = $_FILES['my_file']['tmp_name'];
      if ((is_jpg($file) && lessThenSize($file, DOWNLOAD_FILE_SIZE))) {
        move_uploaded_file(
          $file,
          IMAGES_DIR . $_FILES['my_file']['name']
        );
      } else {
        $fileSize = DOWNLOAD_FILE_SIZE;
        $errorText = "Не соблюдены требования к загрузке файла: Разрешение jpeg, размер не более {$fileSize} kB";
      }
      header("Location: /les_4/task-4-1/public/");     
  }
}

include LAYOUTS_DIR . "main.php";
