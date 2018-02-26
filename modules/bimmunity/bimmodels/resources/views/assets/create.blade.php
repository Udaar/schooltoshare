@extends('layouts.app')

@section('content')
<section class="asset-create-section info-section">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
                    <i class="fa fa-cubes ifm-grey"></i>
                    Add Assets
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
                {!! Form::open(['route' => 'bimassets.store']) !!}
                    @include('bimmodels::assets.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
{{--<section class="equipment-create-section info-section">
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-wrench ifm-grey"></i>
                Add new Asset
            </h3>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
            {!! Form::open(['route' => 'bimassets.store']) !!}

                @include('bimmodels::assets.fields')

                {!! Form::close() !!}
        </div>
    </div>
</div>--}}
@endsection
