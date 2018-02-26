$(function(){
    $('#sample_1_wrapper .row:first-child').css({
        'display': 'none'
    });
    $('#sample_1_wrapper .row:nth-child(2)').children().addClass('col-xs-6').removeClass('col-sm-12');
    $('#sample_1_wrapper .row:nth-child(4)').children().addClass('col-sm-6').removeClass('col-sm-12');
});