<?php
//$cartData = [
//    0 => [
//        'id' => 1,
//        'name' => 'Rebox Zane',
//        'rating' => '4',
//        'price' => 250,
//        'qty' => 2,
//    ],
//    1 => [
//        'id' => 2,
//        'name' => 'Rebox Zane',
//        'rating' => '3',
//        'price' => 300,
//        'qty' => 1,
//    ]
//];

$cartData = $_SESSION['cartData'];

foreach ($cartData as $item) {
    $total += $item['price'] * $item['qty'];
}
?>
<div class="header__right">
    <div class="sh"><a href="shopping-card.htm"><img src="img/Forma_1.svg" alt="basket"
                                                     class="shopping-cart"></a>
        <div class="sh-count">5</div>
        <div class="shopping-cart__drop">
            <? foreach ($cartData as $cartDataElem): ?>
                <?php
                $img = getFilePath($cartDataElem['id'], 'shopping-cart-drop_menu-img');
                ?>
                <div class="product-in-sc">
                    <a href="single-page.htm" style="float: left; width: 240px;">
                        <div class="product-in-sc-img" style="background-image: url(<?= $img ?>)">
                        </div>

                        <div class="product-in-sc-desc">
                            <h3 class="h3-sc-name"><?= $cartDataElem['name'] ?></h3>
                            <div class="sc-rating">
                                <? for ($i = 1; $i <= $cartDataElem['rating']; $i++): ?>
                                <i class="fas fa-star rat"></i>
                                <? endfor; ?>
                            </div>
                            <div class="sc-count"><?= $cartDataElem['qty'] ?>&nbsp;x $<?= $cartDataElem['price'] ?></div>

                        </div>
                    </a>
                    <div class="sh__action"><a href="#" class="action"><i
                                class="far fa-times-circle"></i></a></div>

                </div>
            <? endforeach; ?>
            <div class="total">
                <div>total</div>
                <div>$<?= $total ?></div>
            </div>
            <a href="checkout.htm" class="sc-btn">Checkout</a>
            <a href="shopping-card.htm" class="sc-btn">go&nbsp;to&nbsp;cart</a>
        </div>
    </div>
    <a class="button" href="#">My&nbsp;Account<i class="fas fa-caret-down"></i></a>
</div>
