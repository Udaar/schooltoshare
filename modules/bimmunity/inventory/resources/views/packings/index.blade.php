@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

<section class="packings-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Packings Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
            <i class="fa fa-dropbox ifm-grey"></i>
            Packings
        </h3>
        <a href="{!! route('packings.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
    <!-- /Packings Title Bar -->

    <!-- Packings Table -->
    <div class="row">
        @include('flash::message')
        <div class="ifm-padding-sm-all">
            @include('inventory::packings.table')
        </div>
    </div>
    <!-- /Packings Table -->

</section>

@endsection

