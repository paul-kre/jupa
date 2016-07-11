<?php
require_once LIB_PATH."initialize.php";
global $activePage;

$isHomepage = (strcmp($activePage->urlname, "home") == 0);

if($isHomepage) includeLayoutTemplate("intro");

echo '<div id="container">';

includeLayoutTemplate("sidebar");

echo '</div>';