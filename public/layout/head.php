<?php
global $activePage;
$description = !empty($activePage->description) ? utf8_encode($activePage->description) : DESCRIPTION;
$keywords = !empty($activePage->keywords) ? utf8_encode($activePage->keywords) : KEYWORDS;
$title = TITLE." | ".(!empty($activePage->nicename) ? ucfirst(strip_tags($activePage->nicename)) : 'Architektur Innenarchitektur Düsseldorf');
$pageUrl = URL.($activePage->urlname != 'home' ? $activePage->urlname : '');
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <meta name="copyright" content="Borgmann Durrie GbR, 2016. All rights reserverd.">
    <meta name="author" content="Borgmann Durrie GbR">
    <meta content="<?php echo $description; ?>" name="description">
    <meta content="<?php echo $keywords; ?>" name="keywords">
    <meta content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1" name="viewport">

    <meta content="<?php echo $title; ?>" property="og:title">
    <meta content="website" property="og:type">
    <meta content="<?php echo $pageUrl; ?>" property="og:url">
    <meta content="<?php echo $description; ?>" property="og:description">
    <meta content="<?php echo URL; ?>public/img/intro_background.jpg" property="og:image">

    <link href="<?php echo URL; ?>" rel="canonical" />
    <link rel="apple-touch-icon" href="<?php echo URL; ?>public/icon.png">
    <link rel="icon" type="image/png" href="<?php echo URL; ?>public/icon.png">

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/main.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/layout.css">
    <script src="<?php echo URL; ?>public/js/vendor/modernizr-custom.min.js"></script>
    <script src="<?php echo URL; ?>public/js/plugins.js"></script>
    <script src="<?php echo URL; ?>public/js/infiniteScroll.js"></script>
    <script src="<?php echo URL; ?>public/js/main.js"></script>
    <script src="<?php echo URL; ?>public/js/gallery.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->