@push('head')
    <link rel="stylesheet" href="/metronic/reset/modules/report/create/create_modal.css">
    <style>
        div.selector{
            display: none;
        }
    </style>
@endpush

<script type="text/html" id="number_range">

    <div class="input-group" >
        <input type="number" class="form-control" name="filter_number_range_from" id="filter_number_range_from" onkeypress='return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0))'>
        <span class="input-group-addon"> to </span>
        <input type="number" class="form-control" name="filter_number_range_to" id="filter_number_range_to" onkeypress='return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0))'>
    </div>
        {{--<div class="form-group">--}}
            {{--<label class="ifm-grey ifm-block">Insert Range:</label>--}}
            {{--<input type="number" class="form-control ifm-inline ifm-border-light-grey-all number_range_from" style="width:44%">--}}
            {{--<span>To</span>--}}
            {{--<input type="number" class="form-control ifm-inline ifm-border-light-grey-all number_range_to" style="width:44%">--}}
        {{--</div>--}}
</script>

<script type="text/html" id="date_range">
    <div class="input-group input-medium date-picker input-daterange " data-date="10/11/2012" data-date-format="mm/dd/yyyy">
        <input type="text" class="form-control" name="filter_date_range_from" id="filter_date_range_from">
        <span class="input-group-addon"> to </span>
        <input type="text" class="form-control" name="filter_date_range_to" id="filter_date_range_to">
    </div>
    {{--<div class="form-group">--}}
        {{--<label class="ifm-grey ifm-block">Date Range :</label>--}}
        {{--<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy" style="width: 100%!important;">--}}
            {{--<input type="text" class="form-control date_range_from">--}}
            {{--<span class="input-group-addon"> to </span>--}}
            {{--<input type="text" class="form-control date_range_to">--}}
        {{--</div>--}}
    {{--</div>--}}
</script>

<script type="text/html" id="date_item">

    <div class="input-group input-medium date-picker input-daterange " data-date="10/11/2012" data-date-format="mm/dd/yyyy">
        <input type="text" class="form-control" name="filter_date_item" id="filter_date_item">
    </div>
    {{--<div class="form-group">--}}
        {{--<label class="ifm-grey ifm-block">Date :</label>--}}
        {{--<div class="input-group input-large date-picker " data-date="10/11/2012" data-date-format="mm/dd/yyyy">--}}
            {{--<input type="text" class="form-control date_item_input" style="width: 70%;" >--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<label class="ifm-border-light-grey-all ifm-margin-sm-bottom clearfix filter-group">--}}
        {{--<input type="checkbox"  id="date_item_label">--}}
        {{--<span class="filter input-group input-large date-picker input-daterange pull-right filter" data-date="10/11/2012" data-date-format="mm/dd/yyyy">--}}
            {{--<input type="text" class="ifm-border-light-grey-all input-sm" name="from" disabled="true">--}}
            {{--<span class="input-group-addon"> to </span>--}}
            {{--<input type="text" class="ifm-border-light-grey-all input-sm" name="to" disabled="true">--}}
        {{--</span>--}}
    {{--</label>--}}
</script>

<script type="text/html" id="text_item">
        <input type="text" class="form-control ifm-border-light-grey-all" name="filter_text" id="filter_text">
    {{--<div class="form-group">--}}
        {{--<label class="ifm-grey ifm-block">Text :</label>--}}
        {{--<input type="text" class="form-control ifm-inline ifm-border-light-grey-all text_item_input" >--}}
    {{--</div>--}}
    {{--<label class="ifm-border-light-grey-all ifm-margin-sm-bottom filter-group clearfix">--}}
        {{--<input type="checkbox" id="text_item_label">--}}
        {{--<span class="pull-right filter">--}}
            {{--like--}}
            {{--<input type="text" class="ifm-border-light-grey-all input-sm" disabled="true">--}}
        {{--</span>--}}
    {{--</label>--}}
</script>

<script type="text/html" id="number_item">
    <input type="number" class="form-control ifm-border-light-grey-all" name="filter_number" id="filter_number" onkeypress='return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0))'>
    {{--<div class="form-group">--}}
        {{--<label class="ifm-grey ifm-block">Number :</label>--}}
        {{--<input type="text" class="form-control ifm-inline ifm-border-light-grey-all number_item_input" >--}}
    {{--</div>--}}
    {{--<label class="ifm-border-light-grey-all ifm-margin-sm-bottom clearfix filter-group">--}}
        {{--<input type="checkbox" id="number_item_label">--}}
        {{--<span class=" filter pull-right">--}}
            {{-->--}}
            {{--<input type="number" class="ifm-border-light-grey-all input-sm" disabled="true">--}}
        {{--</span>--}}
    {{--</label>--}}
</script>

<script type="text/html" id="filter">
    {{--<div class="clearfix" style="margin-bottom:5px">--}}
        {{--<div class="col-lg-6">--}}
            {{--<select name="filter_function" id="filter_function" onchange="filter_type(this)" class="form-control select2 ifm-border-light-grey-all filter_field_class">--}}
                {{--<option value="">field 1</option>--}}
                {{--<option value="">field 2</option>--}}
            {{--</select>--}}
        {{--</div>--}}
        {{--<div class="col-lg-6">--}}
            {{--<div class="input-group input-medium date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">--}}
                {{--<input type="text" class="form-control" name="from">--}}
                {{--<span class="input-group-addon"> to </span>--}}
                {{--<input type="text" class="form-control" name="to">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-6">--}}
            {{--<input type="number" class="form-control ifm-border-light-grey-all">--}}
        {{--</div>--}}
        {{--<div class="col-lg-6">--}}
            {{--<input type="text" class="form-control ifm-border-light-grey-all">--}}
        {{--</div>--}}
    {{--</div>--}}


    <div class="clearfix" style="margin-bottom:5px">
        <div class="col-lg-4">
            <select id="filter_column" name="filter_column" onchange="filter_type(this)" class="select2">
                {{--<option value="">field 1</option>--}}
                {{--<option value="">field 2</option>--}}
            </select>
        </div>
        <div class="col-lg-4 filter_field_function_class">
            <select id="filter_function" name="filter_function" onchange="filter_function_type(this)" class="select2">
                {{--<option value="">field 1</option>--}}
                {{--<option value="">field 2</option>--}}
            </select>
        </div>
        <div class="col-lg-4" id="specific_content">
        </div>
        {{--<div class="col-lg-4" id="filter_field_date_range" style="display: none">--}}
            {{--<div class="input-group input-medium date-picker input-daterange " data-date="10/11/2012" data-date-format="mm/dd/yyyy">--}}
                {{--<input type="text" class="form-control" name="filter_date_range_from" id="filter_date_range_from">--}}
                {{--<span class="input-group-addon"> to </span>--}}
                {{--<input type="text" class="form-control" name="filter_date_range_to" id="filter_date_range_to">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-4" id="filter_field_number" style="display: none">--}}
            {{--<input type="number" class="form-control ifm-border-light-grey-all" name="filter_number" id="filter_number">--}}
        {{--</div>--}}
        {{--<div class="col-lg-4" id="filter_field_text_1">--}}
            {{--<input type="text" class="form-control ifm-border-light-grey-all" name="filter_text" id="filter_text">--}}
        {{--</div>--}}
    </div>

</script>

<section class="report-create-section info-section ifm-padding-15-all">
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label class="ifm-grey">Report title:</label>
                <input type="text" class="form-control ifm-border-light-grey-all report-title">
            </div>
        </div>

        <!-- Start Data Source Selection Section -->
        <div class="col-xs-12 ifm-margin-sm-bottom">
            <label class="ifm-grey">Select Module: </label>
            <div class="form-group ifm-no-margin-bottom">
                <select class="select2" name="modal_module_name" id="modal_module_name" onchange="get_module_tables(this)">
                    <option value="0">Select Module</option>
                    @foreach($modules as $module)
                        <option value="{{$module->id}}">{{$module->module_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- End Data Source Selection Section -->

        <!-- Start Data Source Selection Section -->
        <div class="col-xs-12 ifm-margin-sm-bottom">
            <label class="ifm-grey">Select Data Source(s): </label>
            <div class="form-group ifm-no-margin-bottom">
                <select class="select2" name="modal_table_name" id="modal_table_name" onchange="get_table_columns(this)">
                    <option value="0">Select Table</option>
                    {{--@foreach($tables as $table1)--}}
                        {{--@foreach($table1 as $table)--}}
                            {{--<option value="{{$table->table_admin_name}}">{{$table->table_admin_name}}</option>--}}
                        {{--@endforeach--}}
                    {{--@endforeach--}}
                </select>
            </div>
        </div>
        <!-- End Data Source Selection Section -->

        <!-- Start Widget Selection Section -->
        <div class="col-xs-12 ifm-margin-sm-bottom">
            <label class="ifm-grey">Select Widget(s): </label>
            <div class="col-lg-12 ifm-border-light-grey-all ifm-padding-15-all">
                <div id="modal_bar_chart" class="chart-item bar-item pull-left" data-active="bar">
                    <img src="/images/charts/bar.png" alt="">
                </div>
                <div id="modal_pie_chart" class="chart-item pie-item pull-left" data-active="pie">
                    <img src="/images/charts/pie.png" alt="">
                </div>
                <div id="modal_line_chart" class="chart-item line-item pull-left" data-active="line">
                    <img src="/images/charts/line.png" alt="">
                </div>
                <div id="modal_table_chart" class="chart-item table-item pull-left" data-active="table">
                    <img src="/images/charts/table.png" alt="">
                </div>
            </div>
        </div>
        <!-- End Widget Selection Section -->

        <!-- Start Charts Portlet -->
        <div class="col-xs-12">
            <label class="ifm-grey">Select Chart Axes: </label>
            <div class="graph-wrap" id="template_container">
                <div class="graph ifm-border-light-grey-all ifm-margin-sm-bottom">

                    <!-- Start X&Y Selection Section -->
                    <div class="row" id="x_row">
                        <!-- Start X-axis Selection Section -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="ifm-grey">X-axis:</label>
                                <select class="select2" name="x_axis" id="x_axis" onchange="get_x_table_functions()">
                                    <option value="0" disabled selected>Select Field</option>
                                    {{--<option value="1">Field 1</option>--}}
                                    {{--<option value="2">Field 2</option>--}}
                                </select>
                            </div>
                        </div>
                        <!-- End X-axis Selection Section -->

                        <!-- Start Function Selection Section -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="ifm-grey">Select Function:</label>
                                <select class="select2" name="x_column_fun" id="x_column_fun"  onchange="get_x_type()">
                                    <option value="0">Select Function</option>
                                    <option value="sum">Sum</option>
                                    <option value="max">Maximum</option>
                                    <option value="min">Minimum</option>
                                    <option value="avg">Average</option>
                                    <option value="count">Count</option>
                                    {{--<option value="range">Range</option>--}}
                                    {{--<option value="=">Equal</option>--}}
                                    {{--<option value=">">Greater Than</option>--}}
                                    {{--<option value="<">Less Than</option>--}}
                                    {{--<option value="like">Like %</option>--}}
                                    <option value="year">Year</option>
                                    <option value="month">Month</option>
                                    <option value="day">Day</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Function Selection Section -->

                        <div class="col-lg-4" id="x_input">
                        </div>
                    </div>

                    <div class="row" id="y_row">
                        <!-- Start Y-axis Selection Section -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="ifm-grey">Y-axis:</label>
                                <select class="select2" name="y_axis" id="y_axis" onchange="get_y_table_functions()">
                                    <option value="0" disabled selected>Select Field</option>
                                    {{--<option value="1">Field 1</option>--}}
                                    {{--<option value="2">Field 2</option>--}}
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="ifm-grey">Select Function:</label>
                                <select class="select2" name="y_column_fun" id="y_column_fun" onchange="get_y_type()" >
                                    <option value="0">Select Function</option>
                                    <option value="sum">Sum</option>
                                    <option value="max">Maximum</option>
                                    <option value="min">Minimum</option>
                                    <option value="avg">Average</option>
                                    <option value="count">Count</option>
                                    <option value="year">Year</option>
                                    <option value="month">Month</option>
                                    <option value="day">Day</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Y-axis Selection Section -->

                        <div class="col-lg-4" id="y_input">
                        </div>

                    </div>
                    <!-- End X&Y Selection Section -->

                </div>
            </div>
        </div>
        <!-- End Charts Portlet -->

        <!-- Start Filter Section -->
        <div class="col-xs-12 ifm-margin-sm-bottom">
            <label class="ifm-grey">Filters: </label>
            <div class="col-lg-12 ifm-border-light-grey-all ifm-padding-sm-all">
                <div class="row" id="filter_main_div">
                    <div class="col-lg-4 filter_main_divs" style="display: none;">
                        <label class="ifm-grey">Select Field:</label>
                    </div>
                    <div class="col-lg-4 filter_main_divs" style="display: none;">
                        <label class="ifm-grey">Select Filter:</label>
                    </div>
                    <div class="col-lg-4 filter_main_divs" style="display: none;">
                        <label class="ifm-grey">Enter Specific Value:</label>
                    </div>
                    <input type="hidden" id="filter_counter" name="filter_counter" value="0">
                    <div id="filter-container">
                        {{--<div class="clearfix" style="margin-bottom:5px">--}}
                            {{--<div class="col-lg-4">--}}
                                {{--<select id="filter_column_1" name="filter_column_1" onchange="filter_type(this)" class="form-control select2 ifm-border-light-grey-all filter_field_class">--}}
                                    {{--<option value="">field 1</option>--}}
                                    {{--<option value="">field 2</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-4 filter_field_function_class">--}}
                                {{--<select id="filter_function_1" name="filter_function_1" onchange="filter_function_type(this)" class="form-control select2 ifm-border-light-grey-all">--}}
                                    {{--<option value="">field 1</option>--}}
                                    {{--<option value="">field 2</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-4" id="specific_content_1">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="col-lg-12">
                        <span class="filter-add ifm-grey underline">Add Filter</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Filter Section -->

        <!-- Start Table Portlet -->
        <div class="col-xs-12 table-portlet-col" style="display:none">
            <label class="ifm-grey">Select Table Field(s): </label>
            <div class="col-lg-12 ifm-border-light-grey-all ifm-padding-15-all">
                <div class="checkbox-list" id="modal_table_check_list">
                    {{--<label>--}}
                        {{--<input type="checkbox"> Checkbox 1 --}}
                    {{--</label>--}}
                    {{--<label>--}}
                        {{--<input type="checkbox"> Checkbox 2 --}}
                    {{--</label>--}}
                    {{--<label>--}}
                        {{--<input type="checkbox"> Checkbox 3 --}}
                    {{--</label>--}}
                </div>
            </div>
        </div>
        <!-- End Table Portlet -->

    </div>
</section>

@push('scripts')
    <script src="/metronic/js/jquery.loadTemplate.min.js"></script>
    <script>
        var modules = JSON.parse('<?php echo json_encode($modules); ?>');
        var coulmns = JSON.parse('<?php echo json_encode($columns); ?>');
        var tables = JSON.parse('<?php echo json_encode($tables); ?>'.replace(/\\/g,'\\\\'));
        var table_coulmns = [];
        function filterenable1(){
            $('.checkbox-list input[type=checkbox]').on('click', function(){
                var that = $(this);
                if(that.prop("checked")){
                    that.closest('.filter-group').find('.filter input').removeAttr("disabled");
                }
                else{
                    that.closest('.filter-group').find('.filter input').attr("disabled", "true");
                }
            });
        }
        function get_x_type() {
            var selected_function = $('#x_column_fun').val();
            var selected_column_type = $('#x_axis').find(":selected").data("value");
            $("#x_input").empty();
            if(typeof selected_column_type != 'undefined') {
                if (selected_column_type.indexOf('int(') !== -1) {
                    if (selected_function == 'range') {
                        $("#x_input").loadTemplate($("#number_range"), {}, {append: true});
                    } else if (selected_function == '=' || selected_function == '>' || selected_function == '<') {
                        $("#x_input").loadTemplate($("#number_item"), {}, {append: true});
                    }
                }
                if (selected_column_type.indexOf('varchar(') !== -1 || selected_column_type.indexOf('text') !== -1) {
                    if (selected_function == 'like') {
                        $("#x_input").loadTemplate($("#text_item"), {}, {append: true});
                    }
                }
                if (selected_column_type.indexOf('timestamp') !== -1 || selected_column_type.indexOf('datetime') !== -1) {
                    if (selected_function == 'range') {
                        $("#x_input").loadTemplate($("#date_range"), {}, {append: true});
                    } else if (selected_function == '=' || selected_function == '>' || selected_function == '<') {
                        $("#x_input").loadTemplate($("#date_item"), {}, {append: true});
                    }
                }
            }
        }
        function get_y_type() {
            var selected_function = $('#y_column_fun').val();
            var selected_column_type = $('#y_axis').find(":selected").data("value");
            $("#y_input").empty();
            if(typeof selected_column_type != 'undefined') {
                if (selected_column_type.indexOf('int(') !== -1) {
                    if (selected_function == 'range') {
                        $("#y_input").loadTemplate($("#number_range"), {}, {append: true});
                    } else if (selected_function == '=' || selected_function == '>' || selected_function == '<') {
                        $("#y_input").loadTemplate($("#number_item"), {}, {append: true});
                    }
                }
                if (selected_column_type.indexOf('varchar(') !== -1  || selected_column_type.indexOf('text') !== -1) {
                    if (selected_function == 'like') {
                        $("#y_input").loadTemplate($("#text_item"), {}, {append: true});
                    }
                }
                if (selected_column_type.indexOf('timestamp') !== -1 || selected_column_type.indexOf('datetime') !== -1) {
                    if (selected_function == 'range') {
                        $("#y_input").loadTemplate($("#date_range"), {}, {append: true});
                    } else if (selected_function == '=' || selected_function == '>' || selected_function == '<') {
                        $("#y_input").loadTemplate($("#date_item"), {}, {append: true});
                    }
                }
            }
        }
        function  get_x_table_functions(){
            var selected_coulmn = $('#x_axis').val();
            var selected_column_type = $('#x_axis').find(":selected").data("value");
            $("#x_column_fun").empty();
            $("#x_column_fun").select2("val", "");
            if(typeof selected_column_type != 'undefined') {
                if (selected_column_type.indexOf('int(') !== -1) {
                    $('#x_column_fun').append('<option value="0">Select Function</option>');
                    $('#x_column_fun').append('<option value="sum">Sum</option>');
                    $('#x_column_fun').append('<option value="max">Maximum</option>');
                    $('#x_column_fun').append('<option value="min">Minimum</option>');
                    $('#x_column_fun').append('<option value="avg">Average</option>');
                    $('#x_column_fun').append('<option value="count">Count</option>');
                }
                if (selected_column_type.indexOf('varchar(') !== -1  || selected_column_type.indexOf('text') !== -1) {
                    $('#x_column_fun').append('<option value="0">Select Function</option>');
                    $('#x_column_fun').append('<option value="count">Count</option>');
                }
                if (selected_column_type.indexOf('timestamp') !== -1 || selected_column_type.indexOf('datetime') !== -1) {
                    $('#x_column_fun').append('<option value="0">Select Function</option>');
                    $('#x_column_fun').append('<option value="year">Year</option>');
                    $('#x_column_fun').append('<option value="month">Month</option>');
                    $('#x_column_fun').append('<option value="day">Day</option>');
                }
            }
        }
        function  get_y_table_functions(){
            var selected_coulmn = $('#y_axis').val();
            var selected_column_type = $('#y_axis').find(":selected").data("value");
            $("#y_column_fun").empty();
            $("#y_column_fun").select2("val", "");
            if(typeof selected_column_type != 'undefined') {
                if (selected_column_type.indexOf('int(') !== -1) {
                    $('#y_column_fun').append('<option value="0">Select Function</option>');
                    $('#y_column_fun').append('<option value="sum">Sum</option>');
                    $('#y_column_fun').append('<option value="max">Maximum</option>');
                    $('#y_column_fun').append('<option value="min">Minimum</option>');
                    $('#y_column_fun').append('<option value="avg">Average</option>');
                    $('#y_column_fun').append('<option value="count">Count</option>');
                }
                if (selected_column_type.indexOf('varchar(') !== -1 || selected_column_type.indexOf('text') !== -1) {
                    $('#y_column_fun').append('<option value="0">Select Function</option>');
                    $('#y_column_fun').append('<option value="count">Count</option>');
                }
                if (selected_column_type.indexOf('timestamp') !== -1 || selected_column_type.indexOf('datetime') !== -1) {
                    $('#y_column_fun').append('<option value="0">Select Function</option>');
                    $('#y_column_fun').append('<option value="year">Year</option>');
                    $('#y_column_fun').append('<option value="month">Month</option>');
                    $('#y_column_fun').append('<option value="day">Day</option>');
                }
            }
        }

        function get_table_columns(element){
            var element_id = (element).id;
            //var table_name = $('#'+element_id).val();
            var table_id = $('#modal_table_name').select2("val");
            var table_coulmns_counter = 0;
            // $.ajax({
            //     headers: {'X-CSRF-Token': $('input[name="_token"]').val()},
            //     type:'post',
            //     url:'ajax_get_table_columns',
            //     data:{'table_name':table_name},
            //     success:function(result){
                    $("#modal_check_list").empty();
                    $("#x_axis").empty();
                    $("#x_axis").select2("val", "");
                    $("#y_axis").empty();
                    $("#y_axis").select2("val", "");
                    $("#filter_counter").val(0);
                    $(".filter_main_divs").hide();
                    $("#filter-container").empty();
                    //$(".filter_field_class").empty();
                    //$(".filter_field_class").select2("val", "");
                    if(table_id != null) {
                        columns_data = coulmns[table_id];//JSON.parse(result);
                        $('#x_axis').append('<option value="0">Select Column</option>');
                        $('#y_axis').append('<option value="0">Select Column</option>');
                        table_coulmns[table_coulmns_counter++] = '<option value="0">Select Column</option>';
                        for (index in columns_data) {
                            $('#x_axis').append('<option data-elementt=' + columns_data[index].element_status + ' data-dbname=' + columns_data[index].column_original_name + ' data-value=' + columns_data[index].column_type + ' value="' + columns_data[index].id + '">' + columns_data[index].column_admin_name + '</option>');
                            $('#y_axis').append('<option data-elementt=' + columns_data[index].element_status + ' data-dbname=' + columns_data[index].column_original_name + ' data-value=' + columns_data[index].column_type + ' value="' + columns_data[index].id + '">' + columns_data[index].column_admin_name + '</option>');
                            //$('.filter_field_class').append( '<option data-value='+columns_data[index]['Type']+' value="' + columns_data[index]['Field'] + '">' + columns_data[index]['Field'] + '</option>' );
                            table_coulmns[table_coulmns_counter++] = '<option data-elementt=' + columns_data[index].element_status + '  data-dbname=' + columns_data[index].column_original_name +' data-value=' + columns_data[index].column_type + ' value="' + columns_data[index].id + '">' + columns_data[index].column_admin_name + '</option>';
                        }
                    }
                    $("select, input:checkbox, input:radio, input:file").uniform();
                    filterenable1();
                // }
            // })
        }

        function get_module_tables(element){
            var module_id = $('#modal_module_name').select2("val");
            $('#modal_table_name option').remove();
            $('#modal_table_name').select2("val", '');
            $('#modal_table_name').append('<option value="0">Select Table</option>');
            $.each(tables[module_id], function (index, subCatObj) {
                $('#modal_table_name').append('<option data-dbmodal=' + subCatObj.table_model_name +'  data-dbname=' + subCatObj.table_original_name +'  value="' + subCatObj.id + '">' + subCatObj.table_original_name + '</option>');
            });
        }

        function filter_type(element) {
            var element_id  = element.id;
            var splitted_element_id = element_id.split('_');
            var filter_fuction_id = 'filter_function_'+splitted_element_id[2];

            // var selected_coulmn = $(element).find('option:selected').val();
            var selected_column_type = $(element).find('option:selected').data("value");

            $('#specific_content_'+splitted_element_id[2]).empty();
            $('#'+filter_fuction_id).empty();
            $('#'+filter_fuction_id).select2("val", "");
            if(typeof selected_column_type != 'undefined') {
                if (selected_column_type.indexOf('int(') !== -1 || selected_column_type.indexOf('timestamp') !== -1 || selected_column_type.indexOf('datetime') !== -1) {
                    $('#'+filter_fuction_id).append('<option value="0">Select Function</option>');
                    $('#'+filter_fuction_id).append('<option value="range">Range</option>');
                    $('#'+filter_fuction_id).append('<option value="=">Equal</option>');
                    $('#'+filter_fuction_id).append('<option value=">">Greater Than</option>');
                    $('#'+filter_fuction_id).append('<option value="<">Less Than</option>');
                }
                if (selected_column_type.indexOf('varchar(') !== -1 || selected_column_type.indexOf('text') !== -1) {
                    $('#'+filter_fuction_id).append('<option value="0">Select Function</option>');
                    $('#'+filter_fuction_id).append('<option value="like">Like %</option>');
                }
                    // $('#filter_field_date_range_'+splitted_element_id[2]).show();
                    // $('#filter_field_text_'+splitted_element_id[2]).remove();
                    // $('#filter_field_number_'+splitted_element_id[2]).remove();
            }
        }
        function filter_function_type(element) {
            var script_counter = parseInt($("#filter_counter").val()) + 1;

            var element_id  = element.id;
            var splitted_element_id = element_id.split('_');

            var selected_coulmn = $(element).find('option:selected').val();
            var selected_column_type = $('#filter_column_'+splitted_element_id[2]).find('option:selected').data("value");

            $('#specific_content_'+splitted_element_id[2]).empty();
            if(typeof selected_column_type != 'undefined') {
                if (selected_column_type.indexOf('int(') !== -1) {
                    if(selected_coulmn == 'range'){
                        $('#specific_content_'+splitted_element_id[2]).loadTemplate($("#number_range"), {},{append: true});
                        $('#filter_number_range_from').attr('name','filter_number_range_from_'+script_counter);
                        $('#filter_number_range_from').attr('id','filter_number_range_from_'+script_counter);
                        $('#filter_number_range_to').attr('name','filter_number_range_to_'+script_counter);
                        $('#filter_number_range_to').attr('id','filter_number_range_to_'+script_counter);
                    }else if(selected_coulmn == '=' || selected_coulmn == '>' || selected_coulmn == '<'){
                        $('#specific_content_'+splitted_element_id[2]).loadTemplate($("#number_item"), {},{append: true});
                        $('#filter_field_number').attr('name','filter_field_number_'+script_counter);
                        $('#filter_field_number').attr('id','filter_field_number_'+script_counter);
                    }
                }
                if (selected_column_type.indexOf('varchar(') !== -1 || selected_column_type.indexOf('text') !== -1) {
                    if(selected_coulmn == 'like') {
                        $('#specific_content_' + splitted_element_id[2]).loadTemplate($("#text_item"), {}, {append: true});
                        $('#filter_text').attr('name', 'filter_text_' + script_counter);
                        $('#filter_text').attr('id', 'filter_text_' + script_counter);
                    }
                }
                if (selected_column_type.indexOf('timestamp') !== -1 || selected_column_type.indexOf('datetime') !== -1) {
                    if(selected_coulmn == 'range'){
                        $('#specific_content_'+splitted_element_id[2]).loadTemplate($("#date_range"), {},{append: true});
                        $('#filter_date_range_from').attr('name','filter_date_range_from_'+script_counter);
                        $('#filter_date_range_from').attr('id','filter_date_range_from_'+script_counter);
                        $('#filter_date_range_to').attr('name','filter_date_range_to_'+script_counter);
                        $('#filter_date_range_to').attr('id','filter_date_range_to_'+script_counter);
                        datePickerInit();
                    }else if(selected_coulmn == '=' || selected_coulmn == '>' || selected_coulmn == '<'){
                        $('#specific_content_'+splitted_element_id[2]).loadTemplate($("#date_item"), {},{append: true});
                        $('#filter_date_item').attr('name','filter_date_item_'+script_counter);
                        $('#filter_date_item').attr('id','filter_date_item_'+script_counter);
                        datePickerInit();
                    }
                }
            }
        }

        $(function(){
            function filterenable(){
                $('.checkbox-list input[type=checkbox]').on('click', function(){
                    var that = $(this);
                    if(that.prop("checked")){
                        that.closest('.filter-group').find('.filter input').removeAttr("disabled");
                    }
                    else{
                        that.closest('.filter-group').find('.filter input').attr("disabled", "true");
                    }
                });
            }
            filterenable();
            $(document).on('opened', '.remodal', function () {
                $('.input-daterange').daterangepicker({
                    opens: (App.isRTL() ? 'left' : 'right'),
                    format: 'MM/DD/YYYY',
                    separator: ' to ',
                    startDate: moment().subtract('days', 29),
                    endDate: moment(),
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                        'Last 7 Days': [moment().subtract('days', 6), moment()],
                        'Last 30 Days': [moment().subtract('days', 29), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                    },
                    minDate: '01/01/2012',
                    maxDate: '12/31/2018',
                },
                function (start, end) {
                    $('#defaultrange input').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                });
            });
            $(document).on('click', '.filter-add', function(){
                var script_counter = parseInt($("#filter_counter").val()) + 1;
                if(script_counter == 1){
                    $(".filter_main_divs").show();
                    $("#filter-container").empty();
                }
                $("#filter-container").loadTemplate($("#filter"), {},{append: true});
                $('#filter_column').attr('name','filter_column_'+script_counter);
                $('#filter_column').attr('id','filter_column_'+script_counter);
                $('#filter_function').attr('name','filter_function_'+script_counter);
                $('#filter_function').attr('id','filter_function_'+script_counter);

                $('#specific_content').attr('id','specific_content_'+script_counter);
                $("#filter_column_"+script_counter).select2();
                $("#filter_function_"+script_counter).select2();
                $("#filter_column_"+script_counter).empty();
                for(index in table_coulmns) {
                    $("#filter_column_"+script_counter).append( table_coulmns[index] );
                }
                datePickerInit();
                $("#filter_counter").val(script_counter);
            });
                    // $('.add-btn').on('click', loadTimes);
            // function loadTimes(){
            //     $("#template_container").loadTemplate("#template", {}, {append: true});
            //     $('.select2').select2();
            //     chartSelect();
            //     filterenable();
            //     App.init();
            // }
        });
    </script>
@endpush