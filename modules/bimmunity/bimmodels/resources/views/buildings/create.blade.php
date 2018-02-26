@extends('layouts.app')
<style>
    /* Always set the map height explicitly to define the size of the div
    * element that contains the map. */
    #map {
    height: 400px;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    }
</style>

@section('content')
<section class="building-create-section info-section">
    <div class="portlet light ifm-border-light-grey-all">
            <div class="portlet-title ifm-border-light-grey-bottom">
                <div class="caption">
                    <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                        <i class="fa fa-building-o ifm-grey"></i>
                        Add new building
                    </h3>
                </div>
            </div>
            {{-- Errors div --}}
            <div>
                @include('metronic-templates::common.errors')
            </div>
            {{-- Form div --}}
            <div class="portlet-body form">
                <div class="row">
                    {!! Form::open(['files'=>'true','route' => 'buildings.store']) !!}

                        @include('bimmodels::buildings.fields')

                    {!! Form::close() !!}
                </div>
            </div>
    </div>
</section>
@endsection
