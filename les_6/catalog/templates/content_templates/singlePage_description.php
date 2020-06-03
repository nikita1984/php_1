<?php
$name = 'Moschino Cheap And Chic';
$description = 'Compellingly actualize fully researched processes before proactive
            outsourcing. Progressively syndicate collaborative architectures before cutting-edge services.
            Completely
            visualize parallel core competencies rather than exceptional portals.';
$material = 'COTTON';
$designer = 'BINBURHAN';
$rating = 4;
$template = '<i class="fas fa-star rat"></i>';



$productRating = multiRender ($rating, $template);

//ToDo Реализовать отображение переменных через запрос к БД
?>
<!--SINGLE PAGE DESCRIPTION-->
<div class="product-description container">
    <div class="product-desc__wrapper">
        <div class="desc-head">WOMEN COLLECTION
            <div class="border-bottom"></div>
        </div>
        <div class="product-description-name"><?=$name?></div>
        <div class="product-description-rating">
            <?=$productRating?>
        </div>
        <div class="product-description-desc"><?=$description?></div>
        <div class="product-description-info">
            <div><span class="desc-info-name">MATERIAL:</span> <?=$material?></div>
            <div><span class="desc-info-name">DESIGNER:</span> <?=$designer?></div>
        </div>
        <div class="desc-info-price">$561</div>
        <div class="choose-form">
            <div class="form-choose-div"><span class="product-desc-head">CHOOSE COLOR</span><input id="color"
                                                                                                   list="dl_color"
                                                                                                   class="color"
                                                                                                   title="color">
                <datalist id="dl_color">
                    <option label="Red" value="Red"></option>
                    <option label="Blue" value="Blue"></option>
                    <option label="Green" value="Green"></option>
                </datalist>
            </div>
            <div class="form-choose-div"><span class="product-desc-head">CHOOSE SIZE</span><input id="size"
                                                                                                  list="dl_size"
                                                                                                  class="color"
                                                                                                  title="size">
                <datalist id="dl_size">
                    <option label="S" value="S"></option>
                    <option label="M" value="M"></option>
                    <option label="L" value="L"></option>
                </datalist>
            </div>
            <div class="form-choose-div"><span class="product-desc-head">QUANTITY</span><input type="number"
                                                                                               class="number"
                                                                                               title="number">
            </div>
        </div>
        <a href="shopping-card.htm"
           class="choose-btn-text">
            <div class="choose-btn"><i class="fas fa-shopping-cart qw"></i>Add to&nbsp;Cart</div>
        </a>
    </div>
</div>
<!--SINGLE PAGE DESCRIPTION-->