var TIMEOUT = 4000;
var FADETIME = 2000;

function initGallery() {
    setInterval(cycleGallery, TIMEOUT);
}

function cycleGallery() {
    $('.photo-blend').each(function() {
        if($(this).children().length > 1) {
            var $active = $(this).find('.active');
            var $next = ($active.next().length > 0) ? $active.next() : $(this).find('.figure:first');
            $next.css('z-index',2);
            $active.fadeOut(FADETIME, function(){
                $active.css('z-index', 1).show().removeClass('active');
                $next.css('z-index', 3).addClass('active');
            });
        }
    });
}