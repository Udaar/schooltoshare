@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')
<section class="account-type-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Account Type Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
            <i class="fa fa-cogs ifm-grey"></i>
            Account Types
        </h3>
        <a href="{!! route('accountTypes.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
    <!-- /Account Type Title Bar -->

    <div class="row">
        @include('flash::message')

        <!-- Account Type Table -->
        <div class="ifm-padding-sm-all">
            @include('inventory::account_types.table')
        </div>
        <!-- /Account Type Table -->

    </div>
    
</section>
@endsection

