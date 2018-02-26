@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="/metronic/reset/supplier-show-reset.css">
@endsection

@section('content')
<section class="vendor-show-section info-section ifm-padding-all">
    {{-- Vendor Show Title Bar --}}
    <div class="ifm-padding-sm-bottom ifm-margin-sm-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
            <i class="fa fa-truck ifm-grey"></i>
            {!! $vendor->name !!}
        </h3>
    </div>
    {{-- Errors Div --}}
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="container-fluid ifm-white-bg ifm-padding-md-all">
        @include('bimmunity/invoice::vendors.show_fields')
    </div>
    <a href="{!! route('vendors.index') !!}" class="pull-right btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-sm-top">Back</a>
</section>
    {{-- <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-equalizer font-red-sunglo"></i>
                <span class="caption-subject font-red-sunglo bold uppercase">Vendor</span>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row" style="padding-left: 20px">
                @include('vendors.show_fields')
                <a href="{!! route('vendors.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div> --}}
@endsection
