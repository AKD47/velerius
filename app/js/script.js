$(document).ready(function () {

    /*sub-menu show*/ 
    $('.nav-top li').click(function () { 
        /*console.log('click');*/
        var subBlock = $(this).find('.sub-menu');
        var shevron = $(this).find('.shevron');
        /*$('.sub-menu').hide();*/
        if (subBlock.hasClass('open')) {
            $(this).removeClass('active');
            subBlock.removeClass('open').css({display: 'none'});
            shevron.css({display: 'none'});
        }
        else {
            $('.sub-menu').removeClass('open').hide();
            $('.shevron').hide();
            $(this).addClass('active');
            subBlock.addClass('open').css({display: 'block'});
            shevron.css({display: 'block'});            
        };
    });

    /*close sub-menu show*/

});