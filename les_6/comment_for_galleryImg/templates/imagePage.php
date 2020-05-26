<a class="gallery" href="index.php">На главную</a>
<div class="gallery">
    <figure>
        <img class="miniIMG" src="<?= $gallery ?>" alt="<?= $imageTitle ?>"></a>
        <figcaption> Просмотры: <?= $imageView ?></figcaption>
    </figure>
</div>
<form class="formBlock" action="" method="post" name="uploadComments">
    <textarea name="commentText" cols="30" rows="10" maxlength="200"
              placeholder="Введите текст комментария" class="inputTextarea"></textarea>
    <div class="form_downDiv">
        <input type="reset">
        <input type="submit" value="Опубликовать отзыв">
    </div>
</form>
<h2 class="gallery">Отзывы</h2>