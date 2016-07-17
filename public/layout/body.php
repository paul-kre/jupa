<?php
require_once LIB_PATH."initialize.php";
global $activePage;

if($activePage->urlname == "home") includeLayoutTemplate("intro");

?>


<div id="container">

    <div id="menu-button" style="background-image: url('<?php echo URL; ?>public/img/layout/menu.png');"></div>

    <?php includeLayoutTemplate("sidebar"); ?>

    <div id="main-content">
        <article class="view">
            <?php includePage($activePage->urlname); ?>
        </article>
    </div>

</div>