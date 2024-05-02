<?php
if ($in_concat === true) {
    require_once("lang.php");
} else {
    require_once("lang.php");
}
$isScssconverted = false;

if ($in_concat === true) {
    require_once("scssphp/scss.inc.php");
} else {
    require_once("../scssphp/scss.inc.php");
}

use ScssPhp\ScssPhp\Compiler;

if ($isScssconverted) {

    global $compiler;
    $compiler = new Compiler();

    if ($in_concat === true) {
        $compine_css = "assets/css/app.min.css";
        $source_scss = "assets/scss/config/default/app.scss";
    } else {
        $compine_css = "../assets/css/app.min.css";
        $source_scss = "../assets/scss/config/default/app.scss";
    }
    $scssContents = file_get_contents($source_scss);

    if ($in_concat === true) {
        $import_path = "assets/scss/config/default";
    } else {
        $import_path = "../assets/scss/config/default";
    }
    $compiler->addImportPath($import_path);
    $target_css = $compine_css;

    $css = $compiler->compile($scssContents);

    if (!empty($css) && is_string($css)) {
        file_put_contents($target_css, $css);
    }
}
?>
<!DOCTYPE html>
<html lang="<?= $lng ?>" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <title>Kolabspace Admin</title>

    <?php if ($in_concat === true) { ?>
        <?php include 'layouts/title-meta.php'; ?>
        <!-- jsvectormap css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
        <!--Swiper slider css-->
        <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="./assets/img/logo/favicon.ico">
        <?php include 'layouts/head-css.php'; ?>
    <?php } else { ?>
        <?php include '../layouts/title-meta.php'; ?>
        <!-- jsvectormap css -->
        <link href="../assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
        <!--Swiper slider css-->
        <link href="../assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
        <!-- App favicon -->
        <link rel="../shortcut icon" href="./assets/img/logo/favicon.ico">
        <?php include '../layouts/head-css.php'; ?>
    <?php } ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<?php if ($in_concat === true) { ?>
    <?php include 'layouts/body.php'; ?>
<?php } else { ?>
    <?php include '../layouts/body.php'; ?>
<?php } ?>