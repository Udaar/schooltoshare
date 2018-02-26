@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="icon-wallet ifm-grey"></i>
                Edit expense type
            </h3>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($expensesType, ['route' => ['expenses_types.update', $expensesType->id], 'method' => 'patch']) !!}

            @include('bimmunity/invoice::expenses_types.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
