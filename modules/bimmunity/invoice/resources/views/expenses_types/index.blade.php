@extends('layouts.app')

@section('head')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/metronic/reset/tabular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/metronic/reset/extandableTable.css') }}"> --}}
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
        table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child::before{
            top: 10px!important
        }
    </style>
@endsection

@section('content')
<section class="expenses-types-section">
    <!-- Invoices Title Bar -->
    <div class="ifm-padding-sm-bottom ifm-margin-sm-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
            <i class="icon-wallet ifm-grey"></i>
            Expenses Types
        </h3>
        <a href="{!! route('expenses_types.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right">Add New</a>
    </div>

    <div class="row">
        @include('flash::message')
        <!-- Invoices Table -->
        <div class="ifm-padding-sm-all">
            @include('bimmunity/invoice::expenses_types.table')
        </div>

    </div>
</section>
{{-- <div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">ExpensesTypes</span>
        </div>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('expenses_types.create') !!}">Add New</a>
        </h1>
    </div>
    @include('flash::message')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            @include('expenses_types.table')
        </div>
    </div>
</div> --}}
@endsection

