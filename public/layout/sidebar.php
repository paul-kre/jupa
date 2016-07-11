<?php
require_once LIB_PATH."page.php";

function pageToLink($page) {
    global $activePage;
    echo '<a class="indented vertical-center'.(strcmp($activePage->urlname, $page->urlname) == 0 ? ' active' : '').'" href="'
        .($page->enabled ? URL.$page->urlname : '#').'">';
    echo '<div class="vertical-el"><span>'.$page->nicename.'</span></div></a>';
}

function formatPages($pages, $class='') {
    if(!$pages) return;
    echo '<ul'.(!empty($class) ? ' class="'.$class.'"' : '' ).'>';
    foreach($pages as $page) {
        echo '<li>';
        pageToLink($page);
        $subPages = $page->findChildren();
        formatPages($subPages);
        echo '</li>';
    }
    echo '</ul>';
}

$mainPages = Page::findMainPages();



?>

<div id="sidebar">
    <header>
        <div id="logo">
            <img alt="Logo" src="<?php echo URL; ?>public/img/layout/logo.svg">
            <div class="header-title indented">
                Julia <strong>Paschos</strong><br>
                <span class="small">Architektur</span>
            </div>
            <a class="link-area" href="<?php echo URL; ?>"></a>
        </div>
    </header>
    <nav>
        <?php formatPages($mainPages, 'nav-main'); ?>
    </nav>
</div>