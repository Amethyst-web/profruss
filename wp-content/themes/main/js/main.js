/**
 * Created by Nikita on 30.01.2016.
 */
$(document).ready(function(){
    setHeadPosition();
    $( window ).resize(setHeadPosition);

    function setHeadPosition(){
        var headHeight = $(window).height() - 50;
        if($(window).width() > headHeight) {
            var titleMargin = (headHeight - 233) / 2;
            $('header .container').css('min-height', headHeight);
            if(headHeight <= 1000) {
                $('header nav').css('top', headHeight / 10);
            }
            if(titleMargin < 400) {
                $('header .container .title').css('margin-top', titleMargin);
            }
        } else {
            $('header .container, header .container .title, header nav').removeAttr('style');
        }
    }
});