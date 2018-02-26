@extends('layouts.app')

@push('head')
    <style>
        .item-table td,
        .item-table th{
            vertical-align: middle!important;
        }
        :root:root:root .table-bordered > tbody > tr > td:first-child{
            cursor: pointer;
        }
        :root:root:root .table-bordered > tbody > tr:first-child > td{
            border-top-color: #DDDDDD!important;
        }
        :root:root:root .table-bordered thead > tr > th:last-child{
            border-right-color: #DDDDDD!important;
        }
        :root:root:root .table-bordered,
        :root:root:root .table-bordered thead > tr > th{
            border-color: #DDDDDD!important;
        }
    </style>
@endpush

@section('content')
    <section class="ifm-white-bg invoice-show-section clearfix info-section ifm-padding-all ifm-padding-md-all ifm-border-light-grey-all">
        {{-- Order payment Show Title Bar --}}
        <div class="ifm-padding-md-bottom ifm-margin-md-bottom ifm-border-light-grey-bottom clearfix">
            <h4 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-money ifm-grey"></i>
                Order Number #
                {!! $orderPayment->order->order_number !!}
            </h4>
        </div>
        {{-- Errors Div --}}
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="container-fluid ifm-no-padding-left ifm-no-padding-right">
            @include('inventory::order_payments.show_fields')
        </div>
        <a href="{!! route('orderPayments.index') !!}" class="pull-right btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-border-light-grey-all">Back</a>
    </section>
@endsection

 {{-- <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-equalizer font-red-sunglo"></i>
                <span class="caption-subject font-red-sunglo bold uppercase">Order Payment</span>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row" style="padding-left: 20px">
                @include('order_payments.show_fields')
                <a href="{!! route('orderPayments.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div> --}}
