@extends('layouts.app')

@push('head')
    {{-- <link rel="stylesheet" type="text/css" href="/metronic/reset/tabular.css"> --}}
@endpush

@section('content')

<section class="zones ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
    <!-- Zonee Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
            <i class="fa fa-cubes ifm-grey"></i>
            zones
        </h3>
        <a href="{!! route('zones.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right add-btn" style="top:19px;right:36px">Add New</a>
    </div>

    <!-- Zones Table -->
    <div class="row">
        <!-- Filter -->
        <div class="ifm-filter ifm-margin-sm-bottom clearfix">
            <div class="col-xs-12">
                <form class="form-inline">
                    <label class="ifm-grey bold no-margin">Filter by: </label>
                    <input class="form-control" placeholder="Parent Name" type="text" name="">
                    <select class="form-control">
                        <option>Category One</option>
                        <option>Category Two</option>
                        <option>Category Three</option>
                    </select>
                    <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey" href="#">OK</a>
                </form>
            </div>
        </div>
        <!-- Table -->
        <div class="ifm-padding-sm-all">
            @include('bimmodels::zones.table1')
        </div>
    </div>
</section>
@endsection

