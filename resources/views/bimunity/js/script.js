$(function() {
    var eqParent = $('.eq-parent').outerHeight();
    $('.eq-child').css('height', eqParent+'px');
    var eqParentC = $('.eq-parent-c').outerHeight();
    $('.eq-child-c').css('height', eqParentC+'px');
    var eqParentD = $('.eq-parent-d').outerHeight();
    $('.eq-child-d').css('height', eqParentD+'px');
});