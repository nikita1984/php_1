<?php
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

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

// Подгружаем подшаблоны
$gallery = renderTemplate(TEMPLATES_DIR . 'gallery');
$uploadForm = renderTemplate(TEMPLATES_DIR . 'upload_form');

// Загружаем шаблон страницы
echo renderTemplate(LAYOUTS_DIR . 'main', $gallery, $uploadForm);
