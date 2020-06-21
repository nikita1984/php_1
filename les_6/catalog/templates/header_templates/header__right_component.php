<?php
$cartData = [];

if (array_key_exists('cartData', $_SESSION)) {
    $cartData = $_SESSION['cartData'];
}

$numbersCartPosition = count($cartData);

foreach ($cartData as $item) {
    $total += $item['price'] * $item['qty'];
}
?>
<div class="header__right">
    <div class="sh"><a href="shopping-card.htm"><img src="img/Forma_1.svg" alt="basket"
                                                     class="shopping-cart"></a>
        <div class="sh-count"><?= $numbersCartPosition ?></div>
        <div class="shopping-cart__drop">
            <? foreach ($cartData as $cartDataElem): ?>
                <?php
                $img = getFilePath($cartDataElem['id'], 'shopping-cart-drop_menu-img');
                ?>
                <form class="product-in-sc" action="" enctype="multipart/form-data" method="post">
                    <a href="./index.php?page=singlePage&id=<?= $cartDataElem['id'] ?>
                                                           &rating=<?= $cartDataElem['rating'] ?>
                                                           &name=<?= $cartDataElem['name'] ?>
                                                           &price=<?= $cartDataElem['price'] ?>
                                                           &description=<?= $cartDataElem['description'] ?>
                                                           &material=<?= $cartDataElem['material'] ?>
                                                           &designer=<?= $cartDataElem['designer'] ?>"
                       style="float: left; width: 240px;">
                        <div class="product-in-sc-img" style="background-image: url(<?= $img ?>)">
                        </div>

                        <div class="product-in-sc-desc">
                            <h3 class="h3-sc-name"><?= $cartDataElem['name'] ?></h3>
                            <div class="sc-rating">
                                <? for ($i = 1; $i <= $cartDataElem['rating']; $i++): ?>
                                    <i class="fas fa-star rat"></i>
                                <? endfor; ?>
                            </div>
                            <div class="sc-count"><?= $cartDataElem['qty'] ?>&nbsp;x
                                $<?= $cartDataElem['price'] ?></div>

                        </div>
                    </a>
                    <button class="border-none" type="submit" name="delete" value="<?= $cartDataElem['id'] ?>">
                        <a href="#" class="action">
                            <i class="far fa-times-circle"></i>
                        </a>
                    </button>
                    <!--
                    <div class="sh__action"><a href="#" class="action"><i
                                    class="far fa-times-circle"></i></a></div>
                            -->

                </form>
            <? endforeach; ?>
            <div class="total">
                <div>total</div>
                <div>$<?= $total ?></div>
            </div>
            <a href="checkout.htm" class="sc-btn">Checkout</a>
            <a href="shopping-card.htm" class="sc-btn">go&nbsp;to&nbsp;cart</a>
        </div>
    </div>
    <a class="button" href="auth.php">Пожалуйста авторизуйтесь<i class="fas fa-caret-down"></i></a>
</div>
