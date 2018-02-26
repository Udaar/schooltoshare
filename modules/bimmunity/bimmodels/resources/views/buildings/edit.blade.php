@extends('layouts.app')
<link rel="stylesheet" href="/metronic/reset/tabBased.css">
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
    .tabbable-custom > .nav-tabs > li{
        margin-right: 0!important;
        width: 25%;
    }
    .buildingEventimg{
        width: 18%!important;
    }
    .buildingEventimgTd{
        width: 30%;
    }
</style>
@section('content')
<div class="portlet light ifm-border-light-grey-all">
    <div class="portlet-title ifm-border-light-grey-bottom">
        <div class="caption">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-building-o ifm-grey"></i>
                edit Building
            </h3>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>

    <div class="show-zone-tabbable-custome tabbable-custom ifm-border-light-grey-all">
        <!-- Tabs Links -->
        <ul class="show-zone-nav-tabs nav nav-tabs swipe not-m-tabs" id="tabs">
            <li class="show-zone-taxonomy-tab taxonomy-tab active ifm-border-light-grey-bottom m-personal">
                <a class="bold" href="#building" data-toggle="tab" tax>
                    <span style="display: block;" class="fa fa-building icon"></span>
                    Building
                </a>
            </li>
        </ul>

        <div class="show-zone-tab-content tab-content ifm-no-border-all">
            <div class="show-zone-tab-pane tab-pane active" id="building">
                <div class="portlet light ifm-no-margin-bottom ifm-no-padding-all">
                    <div class="clearfix"></div>
                    <div class="show-zone-portlet-body portlet-body">
                        {!! Form::model($building, ['route' => ['buildings.update', $building->id], 'method' => 'patch','files'=>'true']) !!}
                            @include('bimmodels::buildings.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{--<div class="portlet-body form">
        <div class="row">
           {!! Form::model($building, ['route' => ['buildings.update', $building->id], 'method' => 'patch','files'=>'true']) !!}

            @include('bimmodels::buildings.fields')

           {!! Form::close() !!}
        </div>
    </div>--}}
</div>
@endsection