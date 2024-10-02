function scrollEvent() {
    const scroll = $(window).scrollTop();
    
    if ($(window).width()) {
        $("div[data-parallax='true']").each(function() {
        //$.each(parallaxElements,function(){
            //console.log( $(this).data("parallax") );
            var bottompos = parseInt($(this).offset().top - scroll + $(this).outerHeight());
            window.screen = parseInt($(this).outerHeight());
            var toppos = parseInt( $(this).offset().top - scroll );
            //if ( toppos <= screen + 20) {
                if (bottompos > -20) {
                    distance = (window.screen - bottompos) / $(this).data("speed");
                    //console.log( $(this).attr("id") );
                    $(this).find("div.background").css({"-webkit-transform": "translateY(" + distance + "px)", "transform": "translateY(" + distance + "px)" });
                }
            //}
        });
    }
}

function draw() {
    requestAnimationFrame(draw);
    // Drawing code goes here
    scrollEvent();
}

// After DOM load check height of the selector with height:100vh
            // then set it to that selector
            // when address bar hides on mobile, it will not resize
            // recalculate only on orientationchange
            //
function calcVH(id) {
    const el = document.getElementById(id)
    const vH = Math.max(el.offsetHeight);
    el.setAttribute("style", "height:" + vH + "px;");
}

function enableClickToTop() {
    $(document).on("click", "div.totop", function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
}