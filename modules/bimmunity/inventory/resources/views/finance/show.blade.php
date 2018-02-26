@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="/metronic/reset/supplier-show-reset.css">
    <style>
        .media-body h4 span{
            font-weight: 300;
            font-size: 16px;
        }
    </style>
@endsection

@section('content')
    <section class="ifm-white-bg invoice-show-section clearfix info-section ifm-padding-all ifm-padding-md-all ifm-border-light-grey-all">
        {{-- Vendor Show Title Bar --}}
        <div class="ifm-padding-md-bottom ifm-margin-md-bottom ifm-border-light-grey-bottom clearfix">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-bank ifm-grey"></i>
                {!! $bank->name !!}
            </h3>
        </div>
        {{-- Errors Div --}}
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="container-fluid">
            @include('inventory::banks.show_fields')
        </div>
        <a href="{!! route('banks.index') !!}" class="pull-right btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-border-light-grey-all">Back</a>
    </section>
@endsection
