@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
        table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child::before{
            top: 16px!important
        }
    </style>
@endsection

@section('content')
<section class="invoices-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
    <!-- Invoices Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
            <i class="fa fa-bank ifm-grey"></i>
            Banks
        </h3>
        {{--<a href="{!! route('finance.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px">Add New</a>--}}
    </div>
    <div class="row">
        @include('flash::message')
        <!-- Invoices Table -->
        <div class="ifm-padding-sm-all">
            @include('inventory::finance.table')
        </div>
    </div>
</section>
@endsection

