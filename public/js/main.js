var sidebar, intro, container, introEnabled, mainContent, sidebarEnabled;

function init() {
    sidebar = document.querySelector("#sidebar");
    mainContent = document.querySelector("#main-content");

    intro = document.querySelector("#intro");
    if(intro != null) sidebar.style.position = "absolute";

    document.querySelector("#menu-button").onclick = toggleSidebar;

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

function toggleSidebar() {
    if(sidebarEnabled) hideSidebar();
    else showSidebar();
}

function hideSidebar() {
    sidebar.style.left = "-100%";
    mainContent.style.paddingLeft = 0;
    sidebarEnabled = false;
}

function showSidebar() {
    sidebar.style.left = "";
    mainContent.style.paddingLeft = "";
    sidebarEnabled = true;
}

function scroll(e) {
    if(window.scrollY > window.innerHeight) {
        sidebar.style.position = "fixed";
    }
}

document.addEventListener("DOMContentLoaded", init, false);