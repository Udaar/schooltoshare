@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-credit-card ifm-grey"></i>
                Edit payment status
            </h3>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($paymentStatus, ['route' => ['payment_statuses.update', $paymentStatus->id], 'method' => 'patch']) !!}

            @include('bimmunity/invoice::payment_statuses.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
