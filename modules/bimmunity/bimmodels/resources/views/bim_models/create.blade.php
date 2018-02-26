@extends('layouts.app')

@section('content')
    <section class="invoice-create-section info-section">
        <div class="portlet light ifm-border-light-grey-all">
            <div class="portlet-title ifm-border-light-grey-bottom">
                <div class="caption">
                    <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
                        <i class="fa fa-bold ifm-grey"></i>
                        Add Bim Model
                    </h3>
                </div>
            </div>
            <div>
                {{-- @include('metronic-templates::common.errors') --}}
            </div>
            <div class="portlet-body form">
                <div class="row">
                    {!! Form::open(['route' => 'bimModels.store']) !!}
                        @include('bimmodels::bim_models.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
    {{--<section class="content-header">
        <h1>
            Bim Model
        </h1>
    </section>
    <div class="content">
        @include('metronic-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'bimModels.store']) !!}

                        @include('bimmodels::bim_models.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>--}}
@endsection
