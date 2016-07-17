var sidebar, intro;

function init() {
    sidebar = document.querySelector("#sidebar");
    intro = document.querySelector("#intro");

    window.addEventListener('DOMMouseScroll', scroll, false);
    window.onwheel = scroll; // modern standard
    window.onscroll = scroll; // modern standard
    window.ontouchmove  = scroll; // mobile
    document.onkeydown  = scroll;
}

function resize(e) {

}

function scroll(e) {
    if(window.scrollY > window.innerHeight) {
        e.preventDefault();
        sidebar.style.position = "fixed";
        intro.style.display = "none";
        window.scrollTo(0, 0);
    }
}

document.addEventListener("DOMContentLoaded", init, false);