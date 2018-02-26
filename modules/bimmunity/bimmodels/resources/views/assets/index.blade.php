@extends('layouts.app')

@push('head')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/metronic/reset/tabular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/metronic/reset/extandableTable.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/metronic/reset/equipment-reset.css') }}">
@endpush

@section('content')
<section class="equipments-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
    <!-- Equipments Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
            <i class="fa fa-cubes ifm-grey"></i>
            Assets
        </h3>
        <a href="{{ route('bimassets.create') }}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right add-btn" style="top:19px;right:36px">Add New</a>
    </div>
    <div class="row">
        @include('flash::message')

        <!-- Bim Systems Table -->
        <div class="ifm-padding-sm-all">
            @include('bimmodels::assets.table1')
        </div>

    </div>
</section>
{{--<section class="equipments-section">
    <!-- Equipments Title Bar -->
    <div class="ifm-padding-sm-bottom ifm-margin-sm-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
            <i class="fa fa-wrench ifm-grey"></i>
            Assets
        </h3>
        <a href="{!! route('bimassets.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right">Add New</a>
    </div>
    
    <div class="row">
        @include('flash::message')
        
        <!-- Equipment Table -->
        <div class="ifm-padding-sm-all">
            @include('bimmodels::assets.table1')
        </div>
    </div>
</section>--}}

@endsection

@push('scripts')
    <script src="/metronic/js/extendTable.js"></script>
@endpush

