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
            Order Payments
        </h3>
        <a href="{!! route('orderPayments.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px">Add New</a>
    </div>
    <div class="row">
        @include('flash::message')

        <!-- Out Orders Table -->
        <div class="ifm-padding-sm-all">
            @include('inventory::order_payments.table')
        </div>
    </div>
</section>
@endsection

{{-- <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-equalizer font-red-sunglo"></i>
                <span class="caption-subject font-red-sunglo bold uppercase">Order Payments</span>
            </div>
            <h1 class="pull-right">
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('orderPayments.create') !!}">Add New</a>
            </h1>
        </div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('order_payments.table')
            </div>
        </div>
 </div> --}}

