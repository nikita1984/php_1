<?php
//$subContentArrayPlus = [
//    'template' => 'catalog_leftSidePlus_OnePlus',
//    'params' => [
//        'leftSideOnePlusFirst' => 'catalog_leftSidePlus_OnePlusFirst',
//        'leftSideOnePlusSecond' => 'catalog_leftSidePlus_OnePlusSecond'
//    ]
//];
//
//$subContentArray = [
//    'template' => 'catalog_leftSidePlus',
//    'params' => [
//        'leftSideOne' => $subContentArrayPlus,
//        'leftSideTwo' => 'catalog_leftSidePlus_Two',
//        'leftSideThree' => 'catalog_leftSidePlus_Three'
//    ]
//];

$catalog = [
    'title' => 'catalog',
    'template' => 'catalog_content',
    'params' => [
        'leftSide' => renderTemplate(CONTENTS_DIR . 'catalog_leftSide'), // renderTemplate(CONTENTS_DIR . $contentTemplate
        'topFilter' => renderTemplate(CONTENTS_DIR .'catalog_topFilter'),
        'sort' => renderTemplate(CONTENTS_DIR . 'catalog_sort'),
        'catalog' => renderTemplate(CONTENTS_DIR . 'catalog_productCatalog'),
        'catalogBottom' => renderTemplate(CONTENTS_DIR . 'catalog_catalogBottom'),
        'featureBox' => renderTemplate(CONTENTS_DIR . 'catalog_featureBox')
    ]
];

//$singlePage = [
//    'title' => 'singlePage',
//    'template' => 'singlePage_main',
//    'params' => [
//        'imgPanel' => renderTemplate(CONTENTS_DIR . 'singlePage_imgPanel'),
//        'description' => renderTemplate(CONTENTS_DIR . 'singlePage_description'),
//        'likeAlso' => renderTemplate(CONTENTS_DIR . 'singlePage_likeAlso'),
//    ]
//];