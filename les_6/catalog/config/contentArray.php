<?php
$subContentArrayPlus = [
    'template' => 'catalog_leftSidePlus_OnePlus',
    'params' => [
        'leftSideOnePlusFirst' => 'catalog_leftSidePlus_OnePlusFirst',
        'leftSideOnePlusSecond' => 'catalog_leftSidePlus_OnePlusSecond'
    ]
];

$subContentArray = [
    'template' => 'catalog_leftSidePlus',
    'params' => [
        'leftSideOne' => $subContentArrayPlus,
        'leftSideTwo' => 'catalog_leftSidePlus_Two',
        'leftSideThree' => 'catalog_leftSidePlus_Three'
    ]
];

$catalog = [
    'title' => 'catalog',
    'template' => 'catalog_content',
    'params' => [
        'leftSide' => 'catalog_leftSide',
        'topFilter' => 'catalog_topFilter',
        'sort' => 'catalog_sort',
        'catalog' => 'catalog_productCatalog',
        'featureBox' => 'catalog_featureBox'
    ]
];

$singlePage = [
    'title' => 'singlePage',
    'template' => 'singlePage_main',
    'params' => [
        'imgPanel' => 'singlePage_imgPanel',
        'description' => 'singlePage_description',
        'likeAlso' => 'singlePage_likeAlso'
    ]
];