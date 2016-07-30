// elements
var sidebar, intro, mainContent, menuButton;

// booleans
var sidebarEnabled, introVisible;

// colors
var LIGHT_BLUE = "rgb(168, 198, 212)";

function init() {
    sidebar = $("#sidebar");
    mainContent = $("#main-content");
    menuButton = $("#menu-button");

    initIntro();

    menuButton.click(toggleSidebar);

    window.onwheel = scroll; // modern standard
    window.onscroll = scroll; // modern standard
    window.ontouchmove  = scroll; // mobile
    document.onkeydown  = scroll;

    window.onresize = resize;

    scroll();
    resize();
}

function resize(e) {
    if(window.innerWidth < 1024) {
        hideSidebar();
        menuButton.show();
    } else {
        showSidebar();
        menuButton.hide();
    }
}

function toggleSidebar() {
    if(sidebarEnabled) hideSidebar();
    else showSidebar();
}

function hideSidebar() {
    sidebar.css("left", "-100%");
    mainContent.css("padding-left", 0);

    menuButton.children().css("background", "black");

    sidebarEnabled = false;
}

function showSidebar() {
    sidebar.css("left", "");
    mainContent.css("padding-left", "");

    menuButton.children().css("background", LIGHT_BLUE);

    sidebarEnabled = true;
}

function scroll(e) {
    updateIntro();
}



function initIntro() {
    intro = document.querySelector("#intro");
    introVisible = intro != null;
    if(introVisible) sidebar.css("position", "absolute");
}

function updateIntro() {
    if(introVisible) {
        if(window.scrollY > window.innerHeight) {
            //sidebar.style.position = "fixed";
            sidebar.css("position", "fixed");
            intro.style.display = "none";
            introVisible = false;
        } else sidebar.css("position", "absolute");
    }
}

document.addEventListener("DOMContentLoaded", init, false);