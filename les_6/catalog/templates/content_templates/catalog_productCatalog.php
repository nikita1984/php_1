<?php
//ToDo Определить переменные шаблона -> Реализовать каталог через цикл
$price = 52.00;
$name = 'Mango People T-shirt';
$rating = 5;
$fileName = '1.jpg';
$img = getFilePath($fileName, 'small');
$rating = 4;
$template = '<i class="fas fa-star rat"></i>';
$productRating = multiRender($rating, $template);
$catalogArray = [
    [
        'name' => 'Mango People T-shirt',
        'price' => 52.00,
        'filename' => '1.jpg',
        'rating' => 4
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 52.00,
        'filename' => '2.jpg',
        'rating' => 5
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 52.00,
        'filename' => '3.jpg',
        'rating' => 5
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 52.00,
        'filename' => '4.jpg',
        'rating' => 5
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 52.00,
        'filename' => '5.jpg',
        'rating' => 5
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 52.00,
        'filename' => '6.jpg',
        'rating' => 5
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 52.00,
        'filename' => '7.jpg',
        'rating' => 5
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 52.00,
        'filename' => '8.jpg',
        'rating' => 5
    ],
    [
        'name' => 'Mango People T-shirt',
        'price' => 52.00,
        'filename' => '9.jpg',
        'rating' => 5
    ],

];

?>
<div class="product-catalog">

    <div class="catalog-flex">
        <a href="single-page.htm" class="productUnit">
            <div class="unit-img" style="background-image: url(<?= $img ?>)"></div>
            <div class="unit-text">
                <p class="productUnitName">Mango People T-shirt</p>
                <div class="procductUnitPrice">$<?= $price ?></div>
                <div class="rating">
                    <?= $productRating ?>
                </div>
            </div>
        </a>
        <a href="shopping-card.htm" class="addtocard1">Add to&nbsp;card</a>
        <a href="#" class="addtocard2"><i class="far fa-heart"></i></a>
        <a href="#" class="addtocard3"><i class="fas fa-retweet"></i></a>
    </div>

    <div class="catalog-flex">
        <a href="single-page.htm" class="productUnit">
            <div class="unit-img" style="background-image: url(img/catalog-img/2.jpg)"></div>
            <div class="unit-text">
                <p class="productUnitName">Mango People T-shirt</p>
                <div class="procductUnitPrice">$52.00</div>
                <div class="rating">
                    <i class="fas fa-star rat">
                    </i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                </div>
            </div>
        </a>
        <a href="shopping-card.htm" class="addtocard1">Add to&nbsp;card</a>
        <a href="#" class="addtocard2"><i class="far fa-heart"></i></a>
        <a href="#" class="addtocard3"><i class="fas fa-retweet"></i></a>
    </div>

    <div class="catalog-flex">
        <a href="single-page.htm" class="productUnit">
            <div class="unit-img" style="background-image: url(img/catalog-img/3.jpg)"></div>
            <div class="unit-text">
                <p class="productUnitName">Mango People T-shirt</p>
                <div class="procductUnitPrice">$52.00</div>
                <div class="rating">
                    <i class="fas fa-star rat">
                    </i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                </div>
            </div>
        </a>
        <a href="shopping-card.htm" class="addtocard1">Add to&nbsp;card</a>
        <a href="#" class="addtocard2"><i class="far fa-heart"></i></a>
        <a href="#" class="addtocard3"><i class="fas fa-retweet"></i></a>
    </div>

    <div class="catalog-flex">
        <a href="single-page.htm" class="productUnit">
            <div class="unit-img" style="background-image: url(img/catalog-img/4.jpg)"></div>
            <div class="unit-text">
                <p class="productUnitName">Mango People T-shirt</p>
                <div class="procductUnitPrice">$52.00</div>
                <div class="rating">
                    <i class="fas fa-star rat">
                    </i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                </div>
            </div>
        </a>
        <a href="shopping-card.htm" class="addtocard1">Add to&nbsp;card</a>
        <a href="#" class="addtocard2"><i class="far fa-heart"></i></a>
        <a href="#" class="addtocard3"><i class="fas fa-retweet"></i></a>
    </div>

    <div class="catalog-flex">
        <a href="single-page.htm" class="productUnit">
            <div class="unit-img" style="background-image: url(img/catalog-img/5.jpg)"></div>
            <div class="unit-text">
                <p class="productUnitName">Mango People T-shirt</p>
                <div class="procductUnitPrice">$52.00</div>
                <div class="rating">
                    <i class="fas fa-star rat">
                    </i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                </div>
            </div>
        </a>
        <a href="shopping-card.htm" class="addtocard1">Add to&nbsp;card</a>
        <a href="#" class="addtocard2"><i class="far fa-heart"></i></a>
        <a href="#" class="addtocard3"><i class="fas fa-retweet"></i></a>
    </div>

    <div class="catalog-flex">
        <a href="single-page.htm" class="productUnit">
            <div class="unit-img" style="background-image: url(img/catalog-img/6.jpg)"></div>
            <div class="unit-text">
                <p class="productUnitName">Mango People T-shirt</p>
                <div class="procductUnitPrice">$52.00</div>
                <div class="rating">
                    <i class="fas fa-star rat">
                    </i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                </div>
            </div>
        </a>
        <a href="shopping-card.htm" class="addtocard1">Add to&nbsp;card</a>
        <a href="#" class="addtocard2"><i class="far fa-heart"></i></a>
        <a href="#" class="addtocard3"><i class="fas fa-retweet"></i></a>
    </div>

    <div class="catalog-flex">
        <a href="single-page.htm" class="productUnit">
            <div class="unit-img" style="background-image: url(img/catalog-img/7.jpg)"></div>
            <div class="unit-text">
                <p class="productUnitName">Mango People T-shirt</p>
                <div class="procductUnitPrice">$52.00</div>
                <div class="rating">
                    <i class="fas fa-star rat">
                    </i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                </div>
            </div>
        </a>
        <a href="shopping-card.htm" class="addtocard1">Add to&nbsp;card</a>
        <a href="#" class="addtocard2"><i class="far fa-heart"></i></a>
        <a href="#" class="addtocard3"><i class="fas fa-retweet"></i></a>
    </div>

    <div class="catalog-flex">
        <a href="single-page.htm" class="productUnit">
            <div class="unit-img" style="background-image: url(img/catalog-img/8.jpg)"></div>
            <div class="unit-text">
                <p class="productUnitName">Mango People T-shirt</p>
                <div class="procductUnitPrice">$52.00</div>
                <div class="rating">
                    <i class="fas fa-star rat">
                    </i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                </div>
            </div>
        </a>
        <a href="shopping-card.htm" class="addtocard1">Add to&nbsp;card</a>
        <a href="#" class="addtocard2"><i class="far fa-heart"></i></a>
        <a href="#" class="addtocard3"><i class="fas fa-retweet"></i></a>
    </div>

    <div class="catalog-flex">
        <a href="single-page.htm" class="productUnit">
            <div class="unit-img" style="background-image: url(img/catalog-img/9.jpg)"></div>
            <div class="unit-text">
                <p class="productUnitName">Mango People T-shirt</p>
                <div class="procductUnitPrice">$52.00</div>
                <div class="rating">
                    <i class="fas fa-star rat">
                    </i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                    <i class="fas fa-star rat"></i>
                </div>
            </div>
        </a>
        <a href="shopping-card.htm" class="addtocard1">Add to&nbsp;card</a>
        <a href="#" class="addtocard2"><i class="far fa-heart"></i></a>
        <a href="#" class="addtocard3"><i class="fas fa-retweet"></i></a>
    </div>
</div>

