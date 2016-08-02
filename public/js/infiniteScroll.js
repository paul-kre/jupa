var $win;
var activePage="";

var pages = [
    "kontakt",
    "aussen",
    "innen",
    "kueche",
    "bad",
    "einbauten",
    "licht"
];

$(document).ready(function() {
    $win = $(window);

    getActivePage();
    
    $win.scroll(getPage);
    $win.scroll(getActivePage);
    $win.scroll(updateProgressBar);
});

function getPage() {
    if($(document).height() - $win.height() * 1.5 <= $win.scrollTop()) {
        var index = pages.indexOf(activePage) + 1;
        var next = null;
        if(index < pages.length) next = pages[index];

        if(next) {
            $win.unbind("scroll", getPage);
            $.ajax({
                url: next + '/ajax',
                dataType: 'html',
                success: function(html) {
                    $('#main-content').append(html);
                    $win.bind("scroll", getPage);
                }
            });
        }
    }
}

function getActivePage() {
    var $article = $('.view');
    var $select = $article.first();
    var scrollPos = $win.scrollTop();
    $article.each(function() {
        var $el = $(this);

        var margin = $win.height()/2;

        var elOffset = scrollPos - $el.offset().top;
        var selectOffset = scrollPos - $select.offset().top;

        if(elOffset >= 0 && elOffset < selectOffset) $select = $el;
    });

    if(activePage != $select.attr('id')) {
        activePage = $select.attr('id');
        updateLinks();
        updateTitle();
    }
}

function updateTitle() {
    $('.view .page-title.active').removeClass('active');
    $('#' + activePage + ' .page-title').addClass('active');
}

function updateLinks() {
    $('#sidebar .active').removeClass('active');
    $("#sidebar li[name='" + activePage + "']").children().addClass('active');
}

function updateProgressBar() {
    var $activeEl = $('#' + activePage);
    var $progressBar = $('#sidebar li .progress-bar.active');
    var progress = ($win.scrollTop() - $activeEl.offset().top) / $activeEl.height();
    $progressBar.css("height", progress * 100 + '%');
}