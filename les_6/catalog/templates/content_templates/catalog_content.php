<?php
$leftSide = renderTemplate(CONTENTS_DIR . 'catalog_leftSide');
$topFilter = renderTemplate(CONTENTS_DIR . 'catalog_topFilter');
$sort = renderTemplate(CONTENTS_DIR . 'catalog_sort');
$catalog = renderTemplate(CONTENTS_DIR . 'catalog_productCatalog');
$catalogBottom = renderTemplate(CONTENTS_DIR . 'catalog_catalogBottom');
$featureBox = renderTemplate(CONTENTS_DIR . 'catalog_featureBox');
?>
<div class="container">
    <?= $leftSide ?>
    <!--RIGHT-SIDE CATALOG-->
    <section class="right-side">
        <?= $topFilter ?>
        <?= $sort ?>
        <!--PRODUCT CATALOG-->
        <?= $catalog ?>
        <!--PRODUCT CATALOG-->
        <?= $catalogBottom ?>
    </section>
</div>
<?= $featureBox ?>