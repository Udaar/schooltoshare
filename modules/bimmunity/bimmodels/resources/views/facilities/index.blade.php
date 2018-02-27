@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="/metronic/reset/modules/bim_model/facilities.css">
@endpush

@section('content')

    <section class="facilities-section">
        <div class="row">
            <div class="col-lg-3">
                <div class="facilities">
                    <div class="row">
                        <div class="col-xs-12">
                            <h4 class="ifm-margin-md-bottom">School Shared Facilities</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            @foreach($facilities as $facility)
                                <div class="facility-col item text-center">
                                    <div class="facility-item {{(strpos($facility->name,' ')?'two-word':'')}}">
                                        <div class="{{($building->facilityexist($facility->id))?'exisit':'not-exisit'}}">
                                            <img src="data:image/png;base64,{!!($building->facilityexist($facility->id))?$facility->logoavaliable:$facility->lognotavaliable!!}">
                                            <p>{{$facility->name}}</p>
                                        </div>
                                    </div>
                                </div>
                                
                            @endforeach	
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                @include('bimmodels::bimviewer')
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="/js/jquery.matchHeight.js"></script>
    <script>
        $(function() {
            $('.item').matchHeight();
        });
    </script>
@endpush

