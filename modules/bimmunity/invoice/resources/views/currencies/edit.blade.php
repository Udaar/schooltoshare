@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-gg ifm-grey"></i>
                Edit currency
            </h3>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($currency, ['route' => ['currencies.update', $currency->id], 'method' => 'patch']) !!}

            @include('bimmunity/invoice::currencies.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
