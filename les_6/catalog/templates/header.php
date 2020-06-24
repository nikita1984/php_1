<?php
$header_left = renderTemplate(HEADER_DIR . 'header__left_component');
$header_right = renderTemplate(HEADER_DIR . 'header__right_component');
?>
<header class="header">
    <div class="container header__flex">
        <?=$header_left?>
        <?=$header_right?>
    </div>
</header>