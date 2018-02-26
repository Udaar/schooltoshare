var chartItem = $('.chart-item');
var selectedCharts = [];
var colors = [];

chartItem.on('click', ifChartClicked);

function ifChartClicked(){
    var that = $(this);
    if(!$('#modal_table_chart').hasClass('active-chart')) {
        $("#modal_table_check_list").empty();
    }
    if(that.attr('id') == 'modal_table_chart'){
        var table_name = $('#modal_table_name').val();
        $("#modal_check_list").empty();
        var table_id = $('#modal_table_name').select2("val");
        columns_data = coulmns[table_id];
        for(index in columns_data){
            $("#modal_table_check_list").append('<input type="hidden" class="column_db_names" value="'+columns_data[index].column_original_name+'"><input type="hidden" class="column_db_element_status" value="'+columns_data[index].element_status+'"><label class="table_chkbox"> <input  type="checkbox"> '+columns_data[index].column_admin_name+' </label>');
        }
        $("select, input:checkbox, input:radio, input:file").uniform();
        filterenable1();
    }
    var src = that.find('img').attr('src');
    if(src.includes("Green")){
        src = src.replace("Green", "");
        that.find('img').attr('src', src);
        that.css({
            "border": "1px solid #C9C9C9"
        });
        that.removeClass("active-chart");
    }
    else{
        var data_active = that.attr('data-active');
        src = src.replace(data_active, data_active+"Green");
        that.find('img').attr('src', src);
        that.css({
            "border": "3px solid green"
        });
        that.addClass("active-chart");
    }
}
function detectChartSelected(){
    chartItem.each(function(){
        var that = $(this);
        if(that.hasClass('active-chart')){
            var chartType = that.attr('data-active');
            selectedCharts.push(chartType);
        }
    });
    return selectedCharts;
}
function createChart(chartType, id, title, label, data, colors=[]){
    switch (chartType){
        case 'bar':
            createBarChart(id, title, label, data, colors);
            break;
        case 'line':
            createLineChart(id, title, label, data);
            break;
        case 'pie':
            createPieChart(id, title, label, data, colors);
            break;
        default:
            break;
    }
}
function createTable(id, dataSet, columns){
    $('#' + id).DataTable({
        responsive: true,
        data: dataSet,
        columns: columns
    });
}
function getThs(){
    var ths = [];
    $('#modal_table_check_list input[type="checkbox"]:checked').each(function name(params) {
        ths.push($(this).parent().text());
    });
    return ths;
}
function onClickCreate() {
    var x_input1='';var x_input2='';var y_input1='';var y_input2='';
    var filter_arr = [];
    var filter_arr_counter = 0;
    $('#x_input :input').each(function() {
        if(x_input1 == ''){
            x_input1 = $(this).find(":selected").data("dbname");//.select2("data")[0].text;
        }else{
            x_input2 = $(this).find(":selected").data("dbname");//.select2("data")[0].text;
        }
    });
    $('#y_input :input').each(function() {
        if(y_input1 == ''){
            y_input1 = $(this).find(":selected").data("dbname");//.select2("data")[0].text;
        }else{
            y_input2 = $(this).find(":selected").data("dbname");//.select2("data")[0].text;
        }
    });
    $('#filter-container :input').each(function() {
        filter_arr[filter_arr_counter++] = $(this).val();
        if(typeof $(this).find(":selected").data("value") != 'undefined') {
            filter_arr[filter_arr_counter++] = $(this).find(":selected").data("value");
        }
        if(typeof $(this).find(":selected").data("dbname") != 'undefined') {
            filter_arr[filter_arr_counter++] = $(this).find(":selected").data("dbname");
        }
        if(typeof $(this).find(":selected").data("elementt") != 'undefined') {
            filter_arr[filter_arr_counter++] = $(this).find(":selected").data("elementt");
        }
    });
    var table_fields = $("#modal_table_check_list input:checkbox:checked").map(function(){
        return $(this).parent().parent().parent().prev().prev().val();
    }).get();
    var table_status = $("#modal_table_check_list input:checkbox:checked").map(function(){
        return $(this).parent().parent().parent().prev().val();
    }).get();
    $.ajax({
        headers: {'X-CSRF-Token': $('input[name="_token"]').val()},
        type: 'post',
        dataType: "json",
        url: 'ajax_get_table_values',
        data: {
            'table_fields'  : table_fields,
            'table_status'  : table_status,
            'x_axis'        : $('#x_axis').find(":selected").data("dbname"),//.select2("data")[0].text,
            'x_axis_status' : $('#x_axis').find(":selected").data("elementt"),//.select2("data")[0].text,
            'y_axis'        : $('#y_axis').find(":selected").data("dbname"),//.select2("data")[0].text,
            'y_axis_status' : $('#y_axis').find(":selected").data("elementt"),//.select2("data")[0].text,
            'x_column_fun'  : $('#x_column_fun').select2("val"),
            'y_column_fun'  : $('#y_column_fun').select2("val"),
            'x_column_type' : $('#x_axis').find(":selected").data("value"),
            'y_column_type' : $('#y_axis').find(":selected").data("value"),
            'x_input1'      : x_input1,
            'x_input2'      : x_input2,
            'y_input1'      : y_input1,
            'y_input2'      : y_input2,
            'filter_arr'    : filter_arr,
            'table_name'    : $('#modal_table_name').find(":selected").data("dbname"),//.select2("data")[0].text
            'table_modal'    : $('#modal_table_name').find(":selected").data("dbmodal")//.select2("data")[0].text
        },
        success: function (result) {
            AfterAjaxRequest(result);
        }
    })
}
function AfterAjaxRequest(result) {
    var currentSelectedCharts = detectChartSelected();
    console.log(currentSelectedCharts);
    for(var indexx=0; indexx<currentSelectedCharts.length; indexx++){
        var title = $('.report-title').val();
        var d = new Date();
        var id = d.valueOf()+indexx;
        //var id = date('YmdHi')+indexx;
        if (currentSelectedCharts[indexx] != 'table') {
            var el = $.parseHTML('<div id="new-grid-item" class="grid-stack-item to-pdf panel panel-default" data-gs-auto-position="yes" data-gs-width="6" data-gs-height="3"><div class="grid-stack-item-content panel-body"><i class="fa fa-close pull-right remove-widget"style="color:#a0a0a0;font-size:19px;cursor:pointer"></i><canvas id="'+id+'"'+'></canvas></div></div>');
            var grid = $('.grid-stack').data('gridstack');
            grid.add_widget(el);
            colors = [];
            for (var ii = 0; ii < result['x'].length; ii++) {
                getRandomColor();
            }
            // console.log(result['x']);
            // console.log(result['y']);
            createChart(currentSelectedCharts[indexx], id, title, result['x'], result['y'], colors);
        }
        else{
            var coulmns_index = [];
            var table_fields = [];
            table_fields = $("#modal_table_check_list input:checkbox:checked").map(function(){
                return $(this).parent().parent().parent().prev().prev().val();
            }).get();
            var htmlTh = "";
            var columns = [];
            for (var i = 0; i < table_fields.length; i++) {
                htmlTh += '<th class="ifm-main-bg ifm-white">' + table_fields[i] + '</th>';
                columns.push({ title: $.trim(table_fields[i]) });
                coulmns_index[$.trim(table_fields[i])+'1'] = i;
            }
            var dataSet = [];
            for(table_record_index in result['table']){
                for(table_field_index in result['table'][table_record_index]){
                    if(typeof dataSet[table_record_index] == 'undefined'){
                        dataSet[table_record_index] = [];
                    }
                    if(typeof dataSet[table_record_index][coulmns_index[table_field_index]] == 'undefined'){
                        dataSet[table_record_index][coulmns_index[table_field_index]] = '';
                    }
                    dataSet[table_record_index][coulmns_index[table_field_index]] = result['table'][table_record_index][table_field_index];
                }
            }
            var el = $.parseHTML(
                '<div id="new-grid-item" class="grid-stack-item to-pdf panel panel-default" data-gs-auto-position="yes" data-gs-width="12" data-gs-height="3">'
                +'<div class="grid-stack-item-content panel-body">'
                +'<i class="fa fa-close pull-right remove-widget"style="color:#a0a0a0;font-size:19px;cursor:pointer"></i>'
                +'<div class="table-responsive">'
                +'<table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="'+ id +'">'
                +'<thead>'
                +'<tr>'
                +htmlTh
                +'</tr>'
                +'</thead>'
                +'</table>'
                +'</div>'
                +'</div>'
                +'</div>'
            );
            var grid = $('.grid-stack').data('gridstack');
            grid.add_widget(el);
            createTable(id, dataSet, columns);
        }
    }
    selectedCharts = [];
}
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    colors.push(color);
}
function onClickRemoveWidget(){
    var widget = $(this).closest('#new-grid-item');
    var grid = $('.grid-stack').data('gridstack');
    grid.removeWidget(widget);
}