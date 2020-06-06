<?php
//ToDo Реализовать каталог через запрос к БД
$sql = 'SELECT * FROM shopTable';
$catalogData = SQLQuery($sql, 'All');
closeConnection ();
//$catalogData = [
//    [
//        'name' => 'Moschino Cheap And Chic',
//        'price' => 50.00,
//        'id' => 1,
//        'rating' => 1,
//        'color' => 'Red',
//        'size' => 'small',
//        'shipping' => 'FREE',
//        'description' => 'Compellingly actualize fully researched processes before proactive
//            outsourcing. Progressively syndicate collaborative architectures before cutting-edge services.
//            Completely
//            visualize parallel core competencies rather than exceptional portals.',
//        'material' => 'COTTON',
//        'designer' => 'BINBURHAN',
//    ],
//    [
//        'name' => 'Mango People T-shirt',
//        'price' => 152.00,
//        'id' => 2,
//        'rating' => 2,
//        'color' => 'Red',
//        'size' => 'small',
//        'shipping' => 'FREE',
//        'description' => 'some text',
//        'material' => 'material name',
//        'designer' => 'designer name'
//    ],
//    [
//        'name' => 'Mango People T-shirt',
//        'price' => 252.00,
//        'id' => 3,
//        'rating' => 3,
//        'color' => 'Red',
//        'size' => 'small',
//        'shipping' => 'FREE',
//        'description' => 'some text',
//        'material' => 'material name',
//        'designer' => 'designer name'
//    ],
//    [
//        'name' => 'Mango People T-shirt',
//        'price' => 72.00,
//        'id' => 4,
//        'rating' => 4,
//        'color' => 'Red',
//        'size' => 'small',
//        'shipping' => 'FREE',
//        'description' => 'some text',
//        'material' => 'material name',
//        'designer' => 'designer name'
//    ],
//    [
//        'name' => 'Mango People T-shirt',
//        'price' => 112.00,
//        'id' => 5,
//        'rating' => 5,
//        'color' => 'Red',
//        'size' => 'small',
//        'shipping' => 'FREE',
//        'description' => 'some text',
//        'material' => 'material name',
//        'designer' => 'designer name'
//    ],
//    [
//        'name' => 'Mango People T-shirt',
//        'price' => 78.00,
//        'id' => 6,
//        'rating' => 1,
//        'color' => 'Red',
//        'size' => 'small',
//        'shipping' => 'FREE',
//        'description' => 'some text',
//        'material' => 'material name',
//        'designer' => 'designer name'
//    ],
//    [
//        'name' => 'Mango People T-shirt',
//        'price' => 40.00,
//        'id' => 7,
//        'rating' => 2,
//        'color' => 'Red',
//        'size' => 'small',
//        'shipping' => 'FREE',
//        'description' => 'some text',
//        'material' => 'material name',
//        'designer' => 'designer name'
//    ],
//    [
//        'name' => 'Mango People T-shirt',
//        'price' => 35.00,
//        'id' => 8,
//        'rating' => 3,
//        'color' => 'Red',
//        'size' => 'small',
//        'shipping' => 'FREE',
//        'description' => 'some text',
//        'material' => 'material name',
//        'designer' => 'designer name'
//    ],
//    [
//        'name' => 'Mango People T-shirt',
//        'price' => 126.00,
//        'id' => 9,
//        'rating' => 4,
//        'color' => 'Red',
//        'size' => 'small',
//        'shipping' => 'FREE',
//        'description' => 'some text',
//        'material' => 'material name',
//        'designer' => 'designer name'
//    ],
//];

?>
<div class="product-catalog">
    <? foreach ($catalogData as $item): ?>
        <?php
        $img = getFilePath($item['id'], 'small');
        $template = '<i class="fas fa-star rat"></i>';
        $productRating = multiRender($item['rating'], $template);
        ?>
        <div class="catalog-flex">
            <a href="./index.php?page=singlePage&id=<?= $item['id'] ?>
                                                &rating=<?= $item['rating'] ?>
                                                &name=<?= $item['name'] ?>
                                                &price=<?= $item['price'] ?>
                                                &description=<?= $item['description'] ?>
                                                &material=<?= $item['material'] ?>
                                                &designer=<?= $item['designer'] ?>" class="productUnit">
                <div class="unit-img" style="background-image: url(<?= $img ?>)"></div>
                <div class="unit-text">
                    <p class="productUnitName"><?= $item['name'] ?></p>
                    <div class="procductUnitPrice">$<?= $item['price'] ?></div>
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

