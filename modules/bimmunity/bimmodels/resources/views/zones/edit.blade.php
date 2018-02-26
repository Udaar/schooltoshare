@extends('layouts.app')

@section('content')
<div class="portlet light ifm-border-light-grey-all">
    <div class="portlet-title ifm-border-light-grey-bottom">
        <div class="caption">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
                <i class="fa fa-cubes ifm-grey"></i>
                edit zones
            </h3>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($zone, ['route' => ['zones.update', $zone->id], 'method' => 'patch']) !!}

            @include('bimmodels::zones.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection