<?php
$form_title = "Калькулятор";
$result = "";
?>
<h2 class="flexCenter"><?= $form_title ?></h2>
<form class="flexCenter" action="" enctype="multipart/form-data" method="post">
    <input type="file" name='my_file'>
    <input type="submit">
</form>
<p class="flexCenter"><?= $result ?></p>
