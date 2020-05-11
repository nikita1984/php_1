<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Галерея</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="gallery">
    <?=$gallery?>
  </div>
  <h2 class="gallery"><?=$form_title?></h2>
  <p class="gallery"><?=$errorText?></p>
  <form class="gallery" action="" enctype="multipart/form-data" method="post">
      <input type="file" name = 'my_file'>
      <input type="submit">      
  </form>  
</body>
</html>