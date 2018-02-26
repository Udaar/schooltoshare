@extends('layouts.app')

@section('content')
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
                    <i class="icon-layers ifm-grey"></i>
                    Edit Level
                </h3>
            </div>
        </div>
        <div>
        @include('adminlte-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
            {!! Form::model($facility, ['route' => ['facilities.update', $facility->id], 'method' => 'patch']) !!}

                @include('bimmodels::facilities.fields')

            {!! Form::close() !!}
            </div>
        </div>
    </div>
    {{--<section class="content-header">
        <h1>
            Level
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($facility, ['route' => ['facilities.update', $facility->id], 'method' => 'patch']) !!}

                        @include('bimmodels::facilities.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>--}}
@endsection