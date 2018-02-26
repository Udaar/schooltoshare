@extends('layouts.app')

@section('content')
<section class="acount-type-edit-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <i class="fa fa-cogs ifm-grey"></i>
                    Edit Account Type
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
            {!! Form::model($accountType, ['route' => ['accountTypes.update', $accountType->id], 'method' => 'patch']) !!}

                @include('inventory::account_types.fields')

            {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@endsection