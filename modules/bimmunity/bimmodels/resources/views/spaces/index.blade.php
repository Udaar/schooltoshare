@extends('layouts.app')

@section('content')
<section class="spaces-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
    <!-- Spaces Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
            <i class="fa fa-cubes ifm-grey"></i>
            Spaces
        </h3>
        <a href="{{ route('spaces.create') }}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right add-btn" style="top:19px;right:36px">Add New</a>
    </div>
    <div class="row">
        @include('flash::message')

        <!-- Spaces Table -->
        <div class="ifm-padding-sm-all">
            @include('bimmodels::spaces.table')
        </div>

    </div>
</section>
{{--<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">Spaces</span>
        </div>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('spaces.create') !!}">Add New</a>
        </h1>
    </div>
    @include('flash::message')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            @include('bimmodels::spaces.table')
        </div>
    </div>
 </div>--}}
@endsection

