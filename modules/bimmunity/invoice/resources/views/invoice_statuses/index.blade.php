@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

<section class="expenses-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Invoice Statuses Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFOSURBVEhLYwCB0LQ0udCk1L9A/I5SHJac9j4sKfUh2GAYAFmAIUgmAJrFP2oBXkC0BcDImhWanLabOJyaB9VGvAUhielaoSkpxkRhoH6oNuItIBcMHgvAYYslI8EwKEMh2KmtUG3EWwDUdAkmDtIEFYYDoPyW0MQ0m5Dk1CigmmlQYdIsAIotBeLPQNfOB9Iz0fBDoPjGsKS0vUA2eRYAg6kCaMDbkKTU/NCUtDRkDHZAcmoXEM8h3wKaB1Fy6mGgL74DI3I/IlNBcVLqa2AGOw3El8m2AOq6l+Ep6f5hiakuyBho8ImwxLSC0KS0NkosyIS6ND48OS0UGQPFzgJxLVDfRLIsABpcAhRDTzlYMdDCIKg24i0gF1BkQWBKigwo52LBPVAlg9wHxACcFgDT9tOgxEwlSnFYYro+pgXxWRLAIuEM1TAwl0NMZmAAACl30z9AKJnlAAAAAElFTkSuQmCC">
            Invoice Statuses
        </h3>
        <a href="{!! route('invoice_statuses.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right add-btn" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
	<!-- /Invoice Statuses Title Bar -->

	<!-- Invoice Statuses Table -->
    <div class="row">
        @include('flash::message')

        <div class="ifm-padding-sm-all">
            @include('bimmunity/invoice::invoice_statuses.table')
        </div>

    </div>
	<!-- /Invoice Statuses Table -->

</section>

@endsection

