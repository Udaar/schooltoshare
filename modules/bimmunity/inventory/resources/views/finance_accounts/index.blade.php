@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

<section class="finance-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Finance Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
            <i class="fa fa-money ifm-grey"></i>
            Finance Accounts
        </h3>
        <a href="{!! route('financeAccounts.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
    <!-- /Finance Title Bar -->

    <!-- Finance Table -->
    <div class="row">
        @include('flash::message')
        <div class="ifm-padding-sm-all">
            @include('inventory::finance_accounts.table')
        </div>
    </div>
    <!-- /Finance Table -->

</section>

@endsection

