$(function(){
    $(".extandable tr:not(.child)").on('click', function(){
        var distChild = $(this).next();
        var icon = $(this).find("i");
        if(distChild.css("display") == "none"){
            $('.child').css("display", "none");
            $('.table-row i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            distChild.css("display", "table-row");
            icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');
        }
        else if(distChild.css("display") == "table-row"){
            distChild.css("display", "none");
            icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');
        }
    });
});