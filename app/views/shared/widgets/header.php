<?php

if (!isset($controller))
    die ( " (header.php) controller tidak terdeteksi" )

?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?= $dataConfig["LOGO"] ?>" alt="iniGambar" rel="icon" type="image/x-icon">
<meta property="og:description" content="<?= $controller->pageDecs ?>">
<meta property="og:image" content="assets/icons/<?= $controller->pageImage ?>" alt="iniGambar">
<meta itemprop="description" content="<?= $controller->pageDecs ?>" />
<meta itemprop="image" content="<?= $controller->pageImage ?>" />

<meta http-equiv="Copyright" content="<?= $dataConfig["COMPANY"] ?>">
<meta name="author" content="<?= $dataConfig["AUTHOR"] ?>">
<meta name="language" content="Indonesia">
<meta name="keywords" content="<?= $controller->pageKeyword ?>">

<link rel="stylesheet" href="<?= $css ?><?= $nameFile ?>.css">

<title><?= $controller->pageTitle ?></title>
<?php include($widgets."loadingpage.php") ?>