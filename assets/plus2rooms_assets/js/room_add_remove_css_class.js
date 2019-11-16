jQuery(document).ready(function($) {
    var alterClass = function() {
        var ww = document.body.clientWidth;
        if (ww < 400) {
            $(flexi_div).removeClass('inputs half');
            $(flexi_div).addClass('inputs full');

        } else if (ww >= 401) {
            $(flexi_div).addClass('inputs half');
        };
    };
    $(window).resize(function(){
        alterClass();
    });
    //Fire it when the page first loads:
    alterClass();
});