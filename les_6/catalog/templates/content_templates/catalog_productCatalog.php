<?php
$sql = 'SELECT * FROM shopTable';
$catalogData = SQLQuery($sql, 'All');
$_SESSION['catalogData'] = $catalogData;
closeConnection();
?>
<div class="product-catalog">
    <? foreach ($catalogData as $item): ?>
        <?php
        $img = getFilePath($item['id'], 'catalog-img');
        ?>
        <form class="catalog-flex" action="" enctype="multipart/form-data" method="post">
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
                        <?php for ($i = 1; $i <= $item['rating']; $i++ ): ?>
                            <i class="fas fa-star rat"></i>
                        <? endfor; ?>
                    </div>
                </div>
            </a>
            <button type="submit" name="id" value="<?= $item['id'] ?>"><span class="addtocard1">Add to card</span></button>
            <a href="#" class="addtocard2"><i class="far fa-heart"></i></a>
            <a href="#" class="addtocard3"><i class="fas fa-retweet"></i></a>
        </form>
    <? endforeach; ?>
</div>

