<?php
require_once LIB_PATH."initialize.php";
global $activePage;

if($activePage->urlname == "home") {
    includeLayoutTemplate("intro");
    $activePage = Page::findByUrlName('kontakt');
}
?>


<div id="container">

    <div id="menu-button">
        <div></div>
        <div></div>
        <div></div>
    </div>

<?php includeLayoutTemplate("sidebar"); ?>

    <div id="main-content">

<?php getPage(); ?>

    </div>

</div>