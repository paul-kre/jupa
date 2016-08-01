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

    $menuButton.click(toggle$sidebar);

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
        hide$sidebar();
        $menuButton.show();
    } else {
        show$sidebar();
        $menuButton.hide();
    }
}

function toggle$sidebar() {
    if(sidebarEnabled) hide$sidebar();
    else show$sidebar();
}

function hide$sidebar() {
    $sidebar.css("left", "-100%");
    $mainContent.css("padding-left", 0);

    $menuButton.children().css("background", "black");

    sidebarEnabled = false;
}

function show$sidebar() {
    $sidebar.css("left", "");
    $mainContent.css("padding-left", "");

    $menuButton.children().css("background", LIGHT_BLUE);


    sidebarEnabled = true;
}

function scroll(e) {
    if(introVisible) hideIntro();
}

document.addEventListener("DOMContentLoaded", init, false);