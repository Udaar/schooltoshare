@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-money ifm-grey"></i>
                Edit Payment
            </h3>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($orderPayment, ['route' => ['orderPayments.update', $orderPayment->id], 'method' => 'patch']) !!}

            @include('inventory::order_payments.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection