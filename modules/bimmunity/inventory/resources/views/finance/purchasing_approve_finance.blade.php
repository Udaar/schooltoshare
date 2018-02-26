@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
        table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before,
        table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child::before{
            top: 10px!important;
        }
        table.dataTable.no-footer,
        .table-scrollable{
            border: 0!important;
        }
        .table-scrollable>.table-bordered>thead>tr:last-child>th,
        .table.table-bordered thead>tr>th{
            border-color: #93d327;
        }
        div.checker{
            margin-left:0;
        }
        #ajaxTable_length{
            margin-bottom:10px!important;
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
            .filter .col-xs-12:first-child{
                padding: 10px!important;
            }
            .filter .col-xs-12:first-child .form-group:last-child{
                margin-bottom: 0!important;
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
            Financial Purchasing Orders
        </h3>
    </div>
    <div class="row">
        @include('flash::message')

        <!-- Invoices Table -->
        <div class="ifm-padding-sm-all">
            @include('inventory::finance.purchasing_approve_finance_table')
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
                    { "data": "created_name" }
                ],
                "responsive": "true",
                "searching": false,
                "aoColumnDefs": [
                    {
                        "aTargets": [0], "mData":0,
                        "mRender": function ( data, type, full ) {
                             var url = '<a href="{{ route("finance.approved_in_order_show",":id")}}" class="ifm-grey" style="text-decoration:underline">'+ data + '</a>';
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
                $.get('{{ url('finance') }}/ajax_get_approved_in_orders/data/all', function(data) {
                    var table = $('#ajaxTable').DataTable();
                    $.each(data, function(index,subCatObj) {
                        var table_row = table.row.add({
                            "order_number"  : subCatObj.order_number,
                            "date_required" : subCatObj.date_required,
                            "date_received" : subCatObj.date_received,
                            "companyname"   : subCatObj.companyname,
                            "status"        : 'Approved',
                            "cost"          : subCatObj.cost,
                            "created_name"  : subCatObj.created_name,
                            "id"            : subCatObj.id,
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
                $.get('{{ url('finance') }}/ajax_get_unapproved_in_orders/data/all', function(data) {
                    var table = $('#ajaxTable').DataTable();
                    $.each(data, function(index,subCatObj) {
                        var temp_status ;
                        if(subCatObj.status == 1 && subCatObj.element_status ==2){
                            temp_status = 'Pending';
                        }else if(subCatObj.status == 2 && subCatObj.element_status ==2){
                            temp_status = 'Refused';
                        }else if(subCatObj.status == 3 && subCatObj.element_status ==1){
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
