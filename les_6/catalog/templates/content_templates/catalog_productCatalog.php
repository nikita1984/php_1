<?php
//ToDo Реализовать каталог через запрос к БД
$catalogData = [
    [
        'name' => 'Mango People T-shirt',
        'price' => 50.00,
        'filename' => '1.jpg',
        'rating' => 1
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 152.00,
        'filename' => '2.jpg',
        'rating' => 2
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 252.00,
        'filename' => '3.jpg',
        'rating' => 3
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 72.00,
        'filename' => '4.jpg',
        'rating' => 4
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 112.00,
        'filename' => '5.jpg',
        'rating' => 5
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 78.00,
        'filename' => '6.jpg',
        'rating' => 1
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 40.00,
        'filename' => '7.jpg',
        'rating' => 2
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 35.00,
        'filename' => '8.jpg',
        'rating' => 3
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 126.00,
        'filename' => '9.jpg',
        'rating' => 4
    ],
];

?>
<div class="product-catalog">
    <? foreach ($catalogData as $item): ?>
    <?php
        $img = getFilePath($item['filename'], 'small');
        $template = '<i class="fas fa-star rat"></i>';
        $productRating = multiRender($item['rating'], $template);
        ?>
        <div class="catalog-flex">
            <a href="single-page.htm" class="productUnit">
                <div class="unit-img" style="background-image: url(<?= $img ?>)"></div>
                <div class="unit-text">
                    <p class="productUnitName"><?=$item['name']?></p>
                    <div class="procductUnitPrice">$<?=$item['price']?></div>
                    <div class="rating">
                        <?= $productRating ?>
                    </div>
                </div>
            </a>
            <a href="shopping-card.htm" class="addtocard1">Add to&nbsp;card</a>
            <a href="#" class="addtocard2"><i class="far fa-heart"></i></a>
            <a href="#" class="addtocard3"><i class="fas fa-retweet"></i></a>
        </div>
    <? endforeach; ?>
</div>

