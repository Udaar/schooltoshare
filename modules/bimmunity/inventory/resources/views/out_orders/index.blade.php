@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
        table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before,
        table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child::before{
            top: 16px!important;
        }
        table.dataTable.no-footer,
        .table-scrollable{
            border: 0!important;
        }
        .table-scrollable>.table-bordered>thead>tr:last-child>th,
        .table.table-bordered thead>tr>th{
            border-color: #93d327;
        }
        @media screen and (min-width:320px) and (max-width:768px){
            table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before,
            table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child::before{
                font-size: 17px;
                top: 9px!important;
                text-indent: 0;
                font-weight: bold;
                text-align: center;
            }
        }
        @media screen and (min-width:320px) and (max-width:480px){
            .dataTables_length{
                display: none;
            }
            h3{
                font-size: 14px;
            }
        }
    </style>
@endsection

@section('content')
<section class="purchasing-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
    <!-- Purchasing Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
            <i class="fa fa-money ifm-grey"></i>
            Sales Orders
        </h3>
        <a href="{!! route('outOrders.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px">Add New</a>
    </div>
    <div class="row">
        @include('flash::message')

        <!-- Out Orders Table -->
        <div class="ifm-padding-sm-all">
            @include('inventory::out_orders.table')
        </div>
    </div>
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
                "searching": false,
                "aoColumnDefs": [
                    {
                        "aTargets": [0], "mData":0,
                        "mRender": function ( data, type, full ) {
                            var url = '<a href="{{ route("outOrders.show",":id")}}" class="ifm-grey" style="text-decoration:underline">'+ data + '</a>';
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
                $.get('{{ url('outOrders') }}/ajax_get_approved_out_orders/data/all', function(data) {
                    var table = $('#ajaxTable').DataTable();
                    $.each(data, function(index,subCatObj) {
                        var temp_actions = '{!! Form::open(["route" => ["outOrders.destroy", ":id"], "method" => "delete"]) !!}<div class="btn-group ifm-static"><a href="{!! route("outOrders.edit", ":id") !!}" class="btn ifm-btn-default ifm-main-bg ifm-white ifm-margin-xs-right">Edit</a>{!! Form::button("Delete", ["type" => "submit", "class" => "btn ifm-btn-default ifm-light-grey-bg ifm-grey", "onclick" => "return confirm(Are you sure?)"]) !!}</div>{!! Form::close() !!}';

                        temp_actions = temp_actions.replace(/:id/g, subCatObj.id);
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
                $.get('{{ url('outOrders') }}/ajax_get_unapproved_out_orders/data/all', function(data) {
                    var table = $('#ajaxTable').DataTable();
                    $.each(data, function(index,subCatObj) {
                        var temp_actions = '{!! Form::open(["route" => ["outOrders.destroy", ":id"], "method" => "delete"]) !!}<div class="btn-group ifm-static"><a href="{!! route("outOrders.edit", ":id") !!}" class="btn ifm-btn-default ifm-main-bg ifm-white ifm-margin-xs-right">Edit</a>{!! Form::button("Delete", ["type" => "submit", "class" => "btn ifm-btn-default ifm-light-grey-bg ifm-grey", "onclick" => "return confirm(Are you sure?)"]) !!}</div>{!! Form::close() !!}';
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


{{--<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">Sales Orders</span>
        </div>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('outOrders.create') !!}">Add New</a>
        </h1>
    </div>
    @include('flash::message')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            @include('out_orders.table')
        </div>
    </div>
</div>--}}

