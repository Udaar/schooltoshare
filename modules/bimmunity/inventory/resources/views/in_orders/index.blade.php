@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

<section class="purchasing-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Purchasing Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block captilize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhL3ZS9SsNgFIaLg+jioqhDBxG9Ai2Ig6CIg3Vx6OSQIW2atLTaQSs4FMHBK3DQC/CHujlV0EGHgoiX4CV4Cz4nnmjS368tdPCFl/N/TnK+5IsNFZlMZt1xnPIgpMeRbdsL2jIKEj5I2ByE6XR6B/mgLaMg8KLqQGjbpzGAnVS1JxgNYF3H8Euk2Nlsdhv9UUhejVXE0W/VvvGLFEYD0OuVSmUE+Sw2BzeD3rRz8fsFIeA3GvDued58oVCYUDsBz1sw4ReEgK/7AFawh30Fn9RlDKMB7NwW2Ta5A4wGoNfhCXwTmzda4kDb/VxFv0gR7hNBOEDhFHYtn89Piu267jR20yELGb7iFynwdR/QCGJJhjZ+pnfy+WrKL/oa0Av++YBSqTTOfjf0z02w40WhfEVy0BKzLGss2D05/n0ldlDbcUAul5tFXnCAy7BMwa4Q3774JCY56FWpCST++6AWDnFFqVRqFEdRnhb5KbJPHvKmcekZGYCxSvAa2fInMiU9DuCp9vwbwOHM4XiFW0Fyn7SgXC+yjUtt/wMca/CMYKvruCfKmwRX/BAQi30DY4KYpeet0x4AAAAASUVORK5CYII=">
            Purchasing Orders
        </h3>
        <a href="{!! route('inOrders.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
    <!-- /Purchasing Title Bar -->

    <!-- Purchasing Table -->
    <div class="row">
        @include('flash::message')
        <div class="ifm-padding-sm-all">
            @include('inventory::in_orders.table')
        </div>
    </div>
    <!-- /Purchasing Table -->

</section>

@endsection

@push('scripts')
    <script src="/metronic/assets/pages/scripts/table-datatables-ajax.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#ajaxTable').DataTable( {
                //                "ajax": {
                //                    "url": '/finance/approved_in_order_finance/data/all',
                //                    "dataSrc": ""
                //                },
                "columns": [
                    { "data": "order_number" },
                    { "data": "date_required" },
                    { "data": "date_received" },
                    { "data": "companyname"  },
                    { "data": "status" },
                    { "data": "cost" },
                    { "data": "created_name" },
                    { "data": "actions" }
                ],
                "responsive": "true",
                "aoColumnDefs": [
                    {
                        "aTargets": [0], "mData":0,
                        "mRender": function ( data, type, full ) {
                            var url = '<a href="{{ route("inOrders.show",":id")}}" class="ifm-grey" style="text-decoration:underline">'+ data + '</a>';
                            url = url.replace(':id', full.id);
                            return url
                        }
                    },
                ]
            });
        });

        function approved_orders(element){
            var element_id = element.id;
            if($('#'+element_id).is(':checked')==true){
                $.get('{{ url('inOrders') }}/ajax_get_approved_in_orders/data/all', function(data) {
                    var table = $('#ajaxTable').DataTable();
                    $.each(data, function(index,subCatObj) {
                        var temp_actions = '{!! Form::open(["route" => ["inOrders.destroy", ":id"], "method" => "delete"]) !!}<div class="btn-group ifm-static"><a href="{!! route("inOrders.edit", ":id") !!}" class="btn ifm-btn-default ifm-main-bg ifm-white ifm-margin-xs-right">Edit</a>{!! Form::button("Delete", ["type" => "submit", "class" => "btn ifm-btn-default ifm-light-grey-bg ifm-grey", "onclick" => "return confirm(Are you sure?)"]) !!}</div>{!! Form::close() !!}';

                        temp_actions = temp_actions.replace(/:id/g, subCatObj.id);
                        console.log(temp_actions);
                        var table_row = table.row.add({
                            "order_number"  : subCatObj.order_number,
                            "date_required" : subCatObj.date_required,
                            "date_received" : subCatObj.date_received,
                            "companyname"   : subCatObj.companyname,
                            "status"        : 'Approved',
                            "cost"          : subCatObj.cost,
                            "created_name"  : subCatObj.created_name,
                            "id"            : subCatObj.id,
                            "actions"       : temp_actions
                        }).draw().node();
                        $( table_row ).addClass('approved');
                    });
                });
            }else{
                var table = $('#ajaxTable').DataTable();
                $('.approved').each(function (index) {
                    table.row($(this)).remove().draw();
                });
            }
        }

        function unapproved_orders(element){
            var element_id = element.id;
            if($('#'+element_id).is(':checked')==true){
                $.get('{{ url('inOrders') }}/ajax_get_unapproved_in_orders/data/all', function(data) {
                    var table = $('#ajaxTable').DataTable();
                    $.each(data, function(index,subCatObj) {
                        var temp_actions = '{!! Form::open(["route" => ["inOrders.destroy", ":id"], "method" => "delete"]) !!}<div class="btn-group ifm-static"><a href="{!! route("inOrders.edit", ":id") !!}" class="btn ifm-btn-default ifm-main-bg ifm-white ifm-margin-xs-right">Edit</a>{!! Form::button("Delete", ["type" => "submit", "class" => "btn ifm-btn-default ifm-light-grey-bg ifm-grey", "onclick" => "return confirm(Are you sure?)"]) !!}</div>{!! Form::close() !!}';
                        temp_actions = temp_actions.replace(/:id/g, subCatObj.id);
                        var temp_status ;
                        if(subCatObj.status == 0) {
                            temp_status = 'Created';
                        }else if(subCatObj.status == 1){
                            temp_status = 'Pending';
                        }else if(subCatObj.status == 2){
                            temp_status = 'Refused';
                        }else if(subCatObj.status == 3 ){
                            temp_status = 'Waiting';
                        }
                        console.log(temp_actions);
                        var table_row = table.row.add({
                            "order_number"  : subCatObj.order_number,
                            "date_required" : subCatObj.date_required,
                            "date_received" : subCatObj.date_received,
                            "companyname"   : subCatObj.companyname,
                            "status"        : temp_status,
                            "cost"          : subCatObj.cost,
                            "created_name"  : subCatObj.created_name,
                            "id"            : subCatObj.id,
                            "actions"       : temp_actions
                        }).draw().node();
                        $( table_row ).addClass('unapproved');
                    });
                });
            }else{
                var table = $('#ajaxTable').DataTable();
                $('.unapproved').each(function (index) {
                    table.row($(this)).remove().draw();
                });
            }
        }
    </script>
@endpush
