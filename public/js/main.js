jQuery(document).ready(function () {

    datePickerInit();
    timePickerInit();
    laracastFlashInit();
    select2Init();
});

// INIT date-time class
function datePickerInit() {
    $('.date-picker').datepicker({autoclose: true});
    //END date-time configuration
}

// INIT time-picker class
function timePickerInit() {
    $('.timepicker-default').timepicker({
        autoclose: true,
        showSeconds: true,
        minuteStep: 1
    });
}


// laracast flash overlay
function laracastFlashInit() {
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(10000).fadeOut(350);
}

// initialize the select2 dropdown
function select2Init() {
    $(".select2").select2();
}

//////////////////////////////
//							            //
//		START Tree view 	    //
//							            //
//////////////////////////////

/**
 * Refreshes the category tree
 *
 * @return {[type]} [description]
 */
function loadSelectCategoriesTree(taxonomy_name) {
    var categoriesData;
    $.ajax({
        url: '/dashboard/categories/select_json_tree/' + taxonomy_name,

        type: "GET",
        dataType: "json",
        async: false,
        success: function (data) {
            categoriesData = [data];
        },
        error: function (data) {
            console.log('error in main.js loadSelectCategoriesTree() ');
        }

    });

    var initSelectableTree = function () {
        return $('#treeview-selectable').treeview({
            data: categoriesData,
            multiSelect: false,

            /**
             * when a new node is selected
             * change the input field to the node->id
             *
             * if it's unset choose the uncategorized node.
             */
            onNodeSelected: function (event, node) {
                $('#category_id_input').val(node.id);
            },
            // when unselected => set the value to the default 0
            onNodeUnselected: function (event, node) {
                $('#category_id_input').val(0);
            }
        });
    };
    var $selectableTree = initSelectableTree();

    var findSelectableNodes = function () {
        return $selectableTree.treeview('search', [
            $('#input-select-node').val(), {ignoreCase: false, exactMatch: false}
        ]);
    };
    var selectableNodes = findSelectableNodes();

    return true;
}

// END Tree view


//////////////////////////////
//							            //
//		START Form Handel 	  //
//							            //
//////////////////////////////

// Text Area
$('.ifm-form .portlet .form-group input, .ifm-form .portlet .form-group textarea').on('focus', function(){
    var prev = $(this).prev();
    if(AuthUser.id == 3){
        prev.css("cssText", "color: #1BBC9B !important;");
        prev.addClass('bold');
    }
});
$('.ifm-form .portlet .form-group input, .ifm-form .portlet .form-group textarea').on('blur', function(){
    var prev = $(this).prev();
        prev.css("cssText", "color: #566366 !important;");
        prev.removeClass('bold');
});

// Select
$(".select2").on("select2:open", function() {
    if(AuthUser.id == 3){
        $(this).prev().css("cssText", "color: #1BBC9B !important;");
        $(this).prev().addClass('bold');
    }
});
$(".select2").on("select2:close", function() {
    if(AuthUser.id == 3){
        $(this).prev().css("cssText", "color: #566366 !important;");
        $(this).prev().removeClass('bold');
    }
});

// Radio Button
$(function(){
    var radioLabel = $('.ifm-form .radio-label');
    var radio = $('.ifm-form .radio-label input[type="radio"]');
    var checkedRadio = $('.ifm-form .radio-label input[type="radio"]:checked');

    checkedRadio.parent().parent().parent().addClass('ifm-main bold');
    checkedRadio.parent().parent().parent().removeClass('ifm-grey');

    radio.on('click', function(){
        radioLabel.removeClass('ifm-main bold');
        radioLabel.addClass('ifm-grey');
        $(this).parent().parent().parent().addClass('ifm-main bold');
        $(this).parent().parent().parent().removeClass('ifm-grey');
    });
});

// Small Form
//console.log($('.ifm-form-sm').parent().removeClass('col-lg-12').addClass('col-lg-8 col-md-9 col-lg-offset-2 col-md-offset-2'));
