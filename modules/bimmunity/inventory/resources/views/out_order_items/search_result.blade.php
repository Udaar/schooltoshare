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
        }
    </style>
@endsection

@section('content')
    <section class="Items-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
    <!-- Items Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
            <i class="fa fa-th-list ifm-grey"></i>
            Search Results
        </h3>
    </div>
    <div class="row">
        @include('flash::message')

        <!-- Items Table -->
            <div class="ifm-padding-sm-all">
            @include('inventory::out_order_items.search_result_table')
        </div>
    </div>
</section>
@endsection

