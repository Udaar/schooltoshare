@extends('layouts.app')

@section('content')
<section class="zones-create-section info-section">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                    <i class="fa fa-cube ifm-grey"></i>
                    Add new zone
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
                {!! Form::open(['route' => 'zones.store']) !!}
                    @include('bimmodels::zones.fields')
                 {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@endsection
