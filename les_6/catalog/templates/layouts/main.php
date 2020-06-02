<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="sass/style.css">
</head>

<body>
<div class="wrapper">
    <div class="top">
        <!--HEADER-->
        <?=$header?>
        <!--HEADER-->
        <!--MENU-->
        <?=$navigation?>
        <!--MENU-->
        <!--BREADCRUMBS-->
        <?=$breadcrumbs?>
        <!--BREADCRUMBS-->
        <?=$content?>
        <!--SUBSCRIBE PANEL-->
        <?=$subscribePanel?>
    </div>
    <!--SUBSCRIBE PANEL-->
    <!--FOOTER-->
    <?=$footer ?>


    <?=$footerSocial ?>
    <!--FOOTER-->
</div>

</body>
</html>