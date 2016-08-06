// elements
var $sidebar, $mainContent, $menuButton, $intro;

// booleans
var sidebarEnabled, introVisible = false;

// colors
var LIGHT_BLUE = "rgb(168, 198, 212)";

function init() {
    $sidebar = $("#sidebar");
    $mainContent = $("#main-content");
    $menuButton = $("#menu-button");
    $intro  = $("#intro");

    if($intro.length) initIntro();

    $menuButton.click(toggleSidebar);

    window.onwheel = scroll; // modern standard
    window.onscroll = scroll; // modern standard
    window.ontouchmove  = scroll; // mobile
    document.onkeydown  = scroll;

    window.onresize = resize;

    resize();

    initGallery();
}

function initIntro() {
    $mainContent.hide();
    introVisible = true;
    $intro.click(hideIntro);
}

function hideIntro() {
    $mainContent.show();
    $intro.animate({
        height: 0,
        opacity: .2
    }, 500, "easeInQuad", function() {
        $intro.hide();
        introVisible = false;
    });

}

function resize(e) {
    if(window.innerWidth < 1024) {
        hideSidebar();
        $menuButton.show();
    } else {
        showSidebar();
        $menuButton.hide();
    }
}

function toggleSidebar() {
    if(sidebarEnabled) hideSidebar();
    else showSidebar();
}

function hideSidebar() {
    $sidebar.css("left", "-100%");
    $mainContent.css("padding-left", 0);

    $menuButton.children().css("background", "black");
    
    $('#main-content').removeClass("sidebar-enabled");

    sidebarEnabled = false;
}

function showSidebar() {
    $sidebar.css("left", "");
    $mainContent.css("padding-left", "");

    $menuButton.children().css("background", LIGHT_BLUE);

    $('#main-content').addClass("sidebar-enabled");

    sidebarEnabled = true;
}

function scroll(e) {
    if(introVisible) hideIntro();
}

document.addEventListener("DOMContentLoaded", init, false);