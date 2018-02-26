@extends('layouts.app')

@section('content')
<section class="bank-edit-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <i class="fa fa-bank ifm-grey"></i>
                    Edit Bank
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
            {!! Form::model($bank, ['route' => ['banks.update', $bank->id], 'method' => 'patch']) !!}

                @include('inventory::banks.fields')

            {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@endsection