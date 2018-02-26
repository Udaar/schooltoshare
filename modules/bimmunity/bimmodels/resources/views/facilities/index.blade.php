@extends('layouts.app')

@section('content')
    <section class="facilities-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
        <!-- facilities Title Bar -->
        <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
                <i class="icon-layers ifm-grey"></i>
                facilities
            </h3>
            <a href="{{ route('facilities.create') }}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right add-btn" style="top:19px;right:36px">Add New</a>
        </div>
        <div class="row">
            @include('flash::message')

            <!-- Bim Systems Table -->
            <div class="ifm-padding-sm-all">
                @include('bimmodels::facilities.table')
            </div>

        </div>
    </section>
    {{--<section class="content-header">
        <h1 class="pull-left">facilities</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('facilities.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('bimmodels::facilities.table')
            </div>
        </div>
    </div>--}}
@endsection

