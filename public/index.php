<?php
require_once("../includes/initialize.php");

if(isset($_GET['p'])) {
    $activePage = Page::findByUrlName($_GET['p']);
    if(!$activePage) redirectTo("404.php");
}

includeLayoutTemplate("head");

includeLayoutTemplate("body");

includeLayoutTemplate("footer");

