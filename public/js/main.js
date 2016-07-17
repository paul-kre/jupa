var sidebar, intro, container, introEnabled, mainContent;

function init() {
    sidebar = document.querySelector("#sidebar");
    container = document.querySelector("#container");
    mainContent = document.querySelector("#main-content");

    intro = document.querySelector("#intro");
    introEnabled = intro != null;
    if(introEnabled) {
        sidebar.style.position = "absolute";
        container.style.position = "relative";
    }

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
    } else {
        showSidebar();
    }
}

function hideSidebar() {
    sidebar.style.left = "-100%";
    mainContent.style.paddingLeft = 0;
}

function showSidebar() {
    sidebar.style.left = "";
    mainContent.style.paddingLeft = "";
}

function scroll(e) {
    if(window.scrollY > window.innerHeight) {
        intro.style.display = "none";
        sidebar.style.position = "fixed";
        container.style.position = "fixed";
    }
}

document.addEventListener("DOMContentLoaded", init, false);