@extends('FM.layouts.app')

@section('content')
     <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-equalizer font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase">ContactUS</span>
                </div>
            </div>
            <div>
                @include('metronic-templates::common.errors')
            </div>
            <div class="portlet-body form">
                <div class="row" style="padding-left: 20px">
                   @include('FM.contactuses.show_fields')
                   <a href="{!! route('fm.contactuses.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
@endsection
