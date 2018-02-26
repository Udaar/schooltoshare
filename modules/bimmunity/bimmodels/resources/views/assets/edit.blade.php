@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-wrench ifm-grey"></i>
                edit Equipments
            </h3>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($asset, ['route' => ['bimassets.update', $asset->id], 'method' => 'patch']) !!}

            @include('bimmodels::assets.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection