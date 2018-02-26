@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

<section class="accounts-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Accounts Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHESURBVEhL1ZU9LwRBGMfvIhGF1wjREBpCiMQ3UKgIJ2Z2cWFvZ3dm74VGIqI8hVxBFAqNVlS+gMpboRC9hgguKvER/GfvcSJ75PaOhF8yuf3/5+Z5Zp6ZnY38CTjntdx2DS7UpiHkBnO8MdjRQm+VGLY3zB15x4U8Yo5cYkKt4PkCyc64le6gv1XGdDLZjhnnTdedIOudqOHIdSS+xOpqyAuPXxJH5kgGQPJj5nqMZHj0DA2RHCQZAOVbxAT2SIbHr71SXSQDMCHHsYoDkuHB4Pv/nkBdMZHsIxkAwWexB/skw6M3kLsqQzKADo5+RTI8puP0YxUPzHV7yCqC2Y+i73ZSiAayKsO/Ihz1RNLHtLxuJMgbCTlCVnVgpq/06MMScgjlOSdZPb+WILaQaUWgHF64a7J85lOpFl02fQAsy6oju3z02fdPkFDP+N2GbqKuInrjkeTQ3wuhslOW1Uxd34PreFUPQvC1eHy5kewvMROpTqxwR68I42bILk3h9lQnzLbbyCobZnsDGH/DXW+OrM/oW1Ofa55O15MVGnw3elHSx1Il1Scli7arN7CahnKdIk6Mwn6Az+AW2ssPNUFh/z2RyBtnxuFTdEigCgAAAABJRU5ErkJggg==">
            accounts
        </h3>
        <a href="{!! route('accounts.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right add-btn" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
	<!-- /Accounts Title Bar -->

	<!-- Accounts Table -->
    <div class="row">
        @include('flash::message')

        <div class="ifm-padding-sm-all">
            @include('bimmunity/invoice::accounts.table')
        </div>

    </div>
	<!-- /Accounts Table -->

</section>

@endsection

