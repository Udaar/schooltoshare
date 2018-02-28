@extends('layouts.app')

@push('head')
    <link rel="stylesheet" type="text/css" href="/metronic/reset/view_info.css">
@endpush

@section('content')
    <section class="building-section info-section ifm-white-bg">
        <!-- Building Title Bar -->
        <div class="ifm-padding-sm-bottom ifm-margin-sm-bottom ifm-relative clearfix">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-building-o ifm-grey"></i>
                Schools
            </h3>
            @if(\Auth::user()->type!='school')
            <a href="{!! route('buildings.create') !!}" class="pull-right ifm-absolute-right btn ifm-btn-green ifm-grey-bg ifm-white">Add New</a>
            @endif
        </div>
        @foreach($buildings as $building)
        <div class="building-wrapper info-wrapper ifm-margin-sm-bottom">
            <!-- Building Info Box -->
            <div class="building-box info-box">                
                <div class="row">
                    <!-- Building Image -->
                    <div class="col-lg-3 col-xs-12 no-padding-xs">
                        <div class="building-img info-img">
                            <img id="holder_{{ $building->id }}" src="@if( isset($building->profilePicture) && file_exists(public_path( $building->profilePicture )) )
                                    {{  $building->profilePicture }}
                                @else
                                    {{  asset(config('ifm.buildings.image_placeholder')) }}
                                @endif">
                        </div>
                    </div>

                    <!-- Building Details -->
                    <div class="col-lg-9 col-xs-12">
                        <div class="row">
                            <!-- Building Name -->
                            <div class="col-lg-9 col-xs-7">
                                <div class="site-name ifm-grey ifm-padding-sm-top bold uppercase">{{ $building->name }}</div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Building Address -->
                            <div class="col-xs-12">
                                <div class="building-item info-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="fa-stack fa-lg ifm-main">
                                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                <i class="media-object fa fa-map-marker fa-stack-1x"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Address</h4>
                                            <span class="ifm-grey">{{ $building->address }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Building Phone -->
                            <div class="col-lg-6 col-xs-12">
                                <div class="building-item info-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="fa-stack fa-lg ifm-main">
                                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                <i class="media-object fa fa-phone fa-stack-1x"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Phone</h4>
                                            <span class="ifm-grey">{{ $building->phone }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Building Category -->
                        </div>
                        <div class="row">
                            <!-- Building Creation Date -->
                            <div class="col-lg-6 col-xs-12">
                                <div class="building-item info-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="fa-stack fa-lg ifm-main">
                                                <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                <i class="media-object fa fa-calendar fa-stack-1x"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Creation date</h4>
                                            <span class="ifm-grey">{{ $building->year }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <!-- Site Emergency Info -->
                            <div class="col-xs-12">
                                <a class="building-details info-details ifm-grey" buildingId="{{$building->id}}">
                                    <span class="bold">View more details</span>
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slided Content -->
                <div class="building-more-details info-more-details ifm-margin-sm-top" id="div_building_details_{{$building->id}}" style="display: none;">
                    <!-- Site Emergency Info -->
                    <div class="row">
                        <div class="col-xs-12 col-lg-9 col-lg-offset-3" style="padding-left: 30px">
                            <div class="building-address info-address ifm-margin-15-bottom">
                                <span class="fa-stack fa-lg ifm-main">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-map-marker fa-stack-1x"></i>
                                </span>
                                <label class="font-lg no-margin bold ifm-weight-400 ifm-grey ifm-margin-sm-bottom">Emergency Info</label>

                                <p class="ifm-margin-sm-left ifm-no-margin-top ifm-grey" style="line-height: 25px;">{!! $building->emergency_info !!}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Site Map -->
                    <div class="building-map info-map">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="info-map" id="map_{{ $building->id }}" latitude="{{ $building->gps_lat }}" longitude="{{ $building->gps_long }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Building Actions -->
            <div class="building-action info-action">
                <div class="row">
                
                    <div class="building-action info-action">
                        <div class="row">
                            <div class="col-sm-4" style="padding-left:30px">
                            {!! Form::open(['route' => ['buildings.destroy', $building->id], 'method' => 'delete']) !!}
                                <div class="btn-group pull-left ifm-margin-sm-bottom">
                                    <a class="btn ifm-btn ifm-main-bg ifm-white ifm-margin-sm-right" href="{!! route('buildings.edit', [$building->id]) !!}"><span class="hidden-xs">Edit</span><i class="fa fa-edit hidden-lg hidden-md hidden-sm"></i></a>
                                    {{-- <a class="btn ifm-btn" href="#">Delete</a> --}}
                                    {!! Form::button('<span class="hidden-xs">Delete</span><i class="fa fa-trash hidden-lg hidden-md hidden-sm"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                            {!! Form::close() !!}
                            </div>
                            <div class="col-sm-8">
                                <div class="btn-group pull-right">
                                    
                                    {{-- <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-margin-sm-right" href="#"><span class="hidden-xs">Link2</span><i class="fa fa-edit hidden-lg hidden-md hidden-sm"></i></a>
                                    <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-no-margin-right" href="#"><span class="hidden-xs">Link3</span><i class="fa fa-edit hidden-lg hidden-md hidden-sm"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
        @endforeach
    </section>

@endsection

@push('scripts')

<script type="text/javascript">
    $(function (){
        // Google Map Code
        function initMap(lat, lng, div_id) {
            document.getElementById(div_id);
          var uluru = {lat: lat, lng: lng};
          var map = new google.maps.Map(document.getElementById(div_id), {
            zoom: 17,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        };
        //Handle Click Event
        $('.building-details').on('click', function(){
            // Cache Selectors 
            var siteDetailIcon = $('.fa', this),
                siteDetailSpan = $('span', this),
                buildingId = $(this).attr("buildingId"),
                moreDetails = $("#div_building_details_"+buildingId),
                // latitude = 31.324541,
                // longitude = 30.055696,
                latitude = parseFloat($("#map_"+buildingId).attr("latitude")),
                longitude = parseFloat($("#map_"+buildingId).attr("longitude")),

                // Cache Classes Names
                up = "fa-chevron-up",
                down = "fa-chevron-down";
            // Slide All Content Up/Down    
            console.log(latitude+'   '+longitude);
            moreDetails.slideToggle(600, function(){
                initMap( latitude, longitude,'map_'+buildingId );
            });
            // Change Arrow Direction & View Statement
            if(siteDetailIcon.hasClass(down)){
                // If Down Make It Up & "View less details"
                siteDetailIcon.removeClass(down).addClass(up);
                siteDetailSpan.text("View less details");
            }else if(siteDetailIcon.hasClass(up))
            {
                // If Up Make It Down & "View more details"
                siteDetailIcon.removeClass(up).addClass(down);
                siteDetailSpan.text("View more details");
            }
        });
    });
</script>
<script type="text/javascript">
    $('a[id*="lfm"]').each(function(){
        $(this).filemanager('images');
    });
      $(document).on('select_file',function (e,url,id) {
        $.ajax({
            headers:
            {
                'X-CSRF-Token': $('input[name="_token"]').val()
            },
            type:'post',
            url:'/pm/changeBuildingProfilePicture/'+id,
            data:{
                'path':url
            },
            success:function(){
                console.log("updated");
            }
        })
  });
</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6yohSe89WiHJXhZCUA6wSNQnCEzySQVc&callback=initMap">
</script>
@endpush

