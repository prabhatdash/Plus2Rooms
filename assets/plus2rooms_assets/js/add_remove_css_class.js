jQuery(document).ready(function($) {
    var alterClass = function() {
        var ww = document.body.clientWidth;
        if (ww < 400) {
            $(p1).removeClass('row');
            $(p2).removeClass('col-sm-5 col-md-4');

        } else if (ww >= 401) {
            $(p1).addClass('row');
            $(p2).addClass('col-sm-5 col-md-4');
        };
    };
    $(window).resize(function(){
        alterClass();
    });
    //Fire it when the page first loads:
    alterClass();
});