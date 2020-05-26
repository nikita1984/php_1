<?php
$form_title = "Калькулятор";
// $result = "";
?>
<h2 class="flexCenter"><?= $form_title ?></h2>
<form class="flexCenter" action="" enctype="multipart/form-data" method="post">
    <div class="formDiv">
        <p>Аргумент 1: <input type="number" class="formInput" name='arg1' value="2"></p>
        <p>Аргумент 2: <input type="number" class="formInput" name='arg2' value="1"></p>
    </div>
    <div class="formDiv">
        <input type="submit" name='operation' value="summ">
        <input type="submit" name='operation' value="difference">
        <input type="submit" name='operation' value="multiplication">
        <input type="submit" name='operation' value="division">
    </div>
</form>
<p class="flexCenter"><?= $resultText ?></p>
