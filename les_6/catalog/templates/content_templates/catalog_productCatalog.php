<?php
//ToDo Реализовать каталог через запрос к БД
$catalogData = [
    [
        'name' => 'Mango People T-shirt',
        'price' => 50.00,
        'id' => 1,
        'rating' => 1,
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 152.00,
        'id' => 2,
        'rating' => 2
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 252.00,
        'id' => 3,
        'rating' => 3
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 72.00,
        'id' => 4,
        'rating' => 4
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 112.00,
        'id' => 5,
        'rating' => 5
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 78.00,
        'id' => 6,
        'rating' => 1
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 40.00,
        'id' => 7,
        'rating' => 2
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 35.00,
        'id' => 8,
        'rating' => 3
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 126.00,
        'id' => 9,
        'rating' => 4
    ],
];

?>
<div class="product-catalog">
    <? foreach ($catalogData as $item): ?>
    <?php
        $fileName = "{$item['id']}" . '.jpg';
        $img = getFilePath($fileName, 'small');
        $template = '<i class="fas fa-star rat"></i>';
        $productRating = multiRender($item['rating'], $template);
        ?>
        <div class="catalog-flex">
            <a href="./index.php?page=singlePage&id=<?=$item['id']?>" class="productUnit">
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

