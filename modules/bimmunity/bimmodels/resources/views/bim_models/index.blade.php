@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
        table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child::before{
            top: 10px!important
        }
        li[data-dtr-index="8"] .dtr-data{
            word-break: break-all;
        }
    </style>
@endsection

@section('content')
    <section class="invoices-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
        <!-- Invoices Title Bar -->
        <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
                <i class="fa fa-bold ifm-grey"></i>
                Bim Models
            </h3>
            <a href="{{ route('bimModels.create') }}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right add-btn" style="top:19px;right:36px">Add New</a>
        </div>
        <div class="row">
            {{-- @include('flash::message') --}}

            <!-- Bim_models Table -->
            <div class="ifm-padding-sm-all">
                @include('bimmodels::bim_models.table')
            </div>

        </div>
    </section>
    {{--<section class="content-header">
        <h1 class="pull-left">Bim Models</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('bimModels.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('metronic-templates::common.errors')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('bimmodels::bim_models.table')
            </div>
        </div>
    </div>--}}
@endsection

