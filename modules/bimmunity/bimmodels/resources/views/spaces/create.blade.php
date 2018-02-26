@extends('layouts.app')

@section('content')
<section class="spaces-create-section info-section">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
                    <i class="fa fa-cubes ifm-grey"></i>
                    Add Space
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
                {!! Form::open(['route' => 'spaces.store']) !!}
                    @include('bimmodels::spaces.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

{{--<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">Space</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
            {!! Form::open(['route' => 'spaces.store']) !!}

                @include('bimmodels::spaces.fields')

                {!! Form::close() !!}
        </div>
    </div>
</div>--}}
@endsection
