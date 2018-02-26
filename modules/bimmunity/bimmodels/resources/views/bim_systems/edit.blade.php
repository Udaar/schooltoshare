@extends('layouts.app')

@section('content')
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                    <i class="fa fa-cogs ifm-grey"></i>
                    Bim System
                </h3>
            </div>
        </div>
        <div>
            {{-- @include('metronic-templates::common.errors') --}}
        </div>
        <div class="portlet-body form">
            <div class="row">
            {!! Form::model($bimSystem, ['route' => ['bimSystems.update', $bimSystem->id], 'method' => 'patch']) !!}

                @include('bimmodels::bim_systems.fields')

            {!! Form::close() !!}
            </div>
        </div>
    </div>
    {{--<section class="content-header">
        <h1>
            Bim System
        </h1>
    </section>
    <div class="content">
       @include('metronic-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bimSystem, ['route' => ['bimSystems.update', $bimSystem->id], 'method' => 'patch']) !!}

                        @include('bimmodels::bim_systems.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>--}}
@endsection