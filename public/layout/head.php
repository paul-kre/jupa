<?php global $page; ?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo TITLE.(!empty($page->title()) ? " / ".$page->title() : null); ?></title>
    <meta content="<?php echo $page->description(); ?>" name="description">
    <meta content="<?php echo KEYWORDS; ?>" name="keywords">
    <meta content="width=device-width,initial-scale=1,user-scalable=no" name="viewport">

    <meta content="<?php echo $page->title(); ?>" property="og:title">
    <meta content="website" property="og:type">
    <meta content="<?php echo $page->description(); ?>" property="og:description">

    <meta content="<?php echo $_SERVER["REQUEST_URI"]; ?>" property="og:url">
    <meta content="<?php echo URL; ?>public/apple-touch-icon.png" property="og:image">

    <link href="<?php echo URL; ?>" rel="canonical" />
    <link rel="apple-touch-icon" href="<?php echo URL; ?>public/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo URL; ?>public/apple-touch-icon.png">

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/main.css">
    <script src="<?php echo URL; ?>public/js/vendor/modernizr-custom.min.js"></script>
    <script src="<?php echo URL; ?>public/js/plugins.js"></script>
    <script src="<?php echo URL; ?>public/js/main.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->