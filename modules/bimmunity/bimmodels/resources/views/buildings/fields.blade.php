<!-- Input Fields -->
<div class="row">
    <div class="col-lg-6 col-xs-12">
        <!-- Category Id Field -->
        
        <!-- Name Field -->
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group col-sm-6 ifm-width-100">
                    {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
                </div>
            </div>
        </div>
        <!-- Phone Field -->
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group col-sm-6 ifm-width-100">
                    {!! Form::label('phone', 'Phone:', ['class' => 'ifm-grey']) !!}
                    {!! Form::text('phone', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
                </div>
            </div>
        </div>
        
        <!-- Country Field -->
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group col-sm-6 ifm-width-100">
                    {!! Form::label('country', 'Country:', ['class' => 'ifm-grey']) !!}
                    {!! Form::select('country_id', \App\Country::all()->pluck('name','id'), null, ['class' => 'form-control select2','placeholder'=>'Country','id'=>'country']) !!}
                </div>
            </div>
        </div>
        <!-- City Field -->
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group col-sm-6 ifm-width-100">
                    {!! Form::label('city', 'City:', ['class' => 'ifm-grey']) !!}
                    <select id="city" class="form-control select2" placeholder="City">
                        <option value="0" disabled selected>City</option>
                    </select>
                </div>
            </div>
        </div>
        
        <!-- Emergency Field -->
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group col-sm-12 col-lg-12 ifm-width-100">
                    {!! Form::label('emergency_info', 'Emergency Info:', ['class' => 'ifm-grey']) !!}
                    {!! Form::textarea('emergency_info', null, ['class' => 'form-control ifm-border-light-grey-all', 'rows' => '5']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xs-12">
        <!-- Year Field -->
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group col-sm-6 ifm-width-100">
                    {!! Form::label('year', 'Year:', ['class' => 'ifm-grey']) !!}
                    {!! Form::selectRange('year', 2030, 1950, null, ['class' => 'form-control select2']) !!}
                </div>
            </div>
        </div>
        <!-- Gps Lat Field -->
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group col-sm-6 ifm-width-100">
                    {!! Form::label('gps_lat', 'Gps Lat:', ['class' => 'ifm-grey']) !!}
                    {!! Form::text('gps_lat', null, ['class' => 'form-control ifm-border-light-grey-all','id'=>'gps_lat']) !!}
                </div>
            </div>
        </div>
        <!-- Gps Long Field -->
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group col-sm-6 ifm-width-100">
                    {!! Form::label('gps_long', 'Gps Long:', ['class' => 'ifm-grey']) !!}
                    {!! Form::text('gps_long', null, ['class' => 'form-control ifm-border-light-grey-all','id'=>'gps_long']) !!}
                </div>
            </div>
        </div>
        <!-- Address Field -->
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group col-sm-6 ifm-width-100">
                    {!! Form::label('address', 'Address:', ['class' => 'ifm-grey']) !!}
                    {!! Form::text('address', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
                </div>
            </div>
        </div>
        
        <!-- Profile Picture Field -->
        <div class="row">
            <div class="form-group col-sm-12" style="padding-left:30px">
                {!! Form::label('logo', 'Logo:', ['class' => 'ifm-block']) !!}
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail ifm-border-light-grey-all" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                    <div>
                        <span class="btn red btn-outline btn-file">
                            <span class="fileinput-new"> Select image </span>
                            <span class="fileinput-exists"> Change </span>
                            <input type="file" name="logo[]"> </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Map Field -->
<div class="row">
    <div class="col-xs-12" style="padding: 0 30px">
        <div id="map"></div>
    </div>
</div>

<!-- Submit Field -->
<div class="row ifm-margin-md-top">
    <div class="col-xs-12">
        <div class="form-group col-sm-12">
            <div class="form-actions">
                <div class="row  col-md-offset-0">
                    {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
                    <a href="{!! route('buildings.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6yohSe89WiHJXhZCUA6wSNQnCEzySQVc"></script>
<script>
    // In this example, we center the map, and add a marker, using a LatLng object
    // literal instead of a google.maps.LatLng object. LatLng object literals are
    // a convenient way to add a LatLng coordinate and, in most cases, can be used
    // in place of a google.maps.LatLng object.

    var map;
    var marker;
    var infowindow;
    var position;
    function initialize() {
    var mapOptions = {
        zoom: 8,
        center: {lat: 25.207066, lng:55.273107 }
    };
    var gps_lat_Edit =document.getElementById("gps_lat");
    var gps_long_Edit =document.getElementById("gps_long");
    if(gps_lat_Edit.value == '' && gps_long_Edit.value == '')
    {
         position={lat: 25.207066, lng: 55.273107};
    }
    else
    {
        position={lat: parseFloat(gps_lat_Edit.value), lng: parseFloat(gps_long_Edit.value)};
    }
    //position={lat: 30.040106, lng: 31.242922};
    console.log(position);
    map = new google.maps.Map(document.getElementById('map'),
        mapOptions);

    marker = new google.maps.Marker({
        draggable: true,
        map: map
    });
    infowindow = new google.maps.InfoWindow({
    });
    google.maps.event.addListener(map, 'click', function(event) {
              placeMarker(event.latLng);
       });

    function placeMarker(location) 
    {
         marker.setPosition(location);
         var gps_lat =document.getElementById("gps_lat");
         var gps_long =document.getElementById("gps_long");
         gps_lat.value =marker.getPosition().lat();
         gps_long.value =marker.getPosition().lng();
    }
    google.maps.event.addListener(marker, 'dragend', function() {
        var gps_lat =document.getElementById("gps_lat");
        var gps_long =document.getElementById("gps_long");
        gps_lat.value =marker.getPosition().lat();
        gps_long.value =marker.getPosition().lng();
    });
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        };

        infowindow.setPosition(pos);
        marker.setPosition(pos);
        map.setCenter(pos);
        }, function() {
        handleLocationError(true, infowindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infowindow, map.getCenter());
    }
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infowindow.setPosition(position);
    marker.setPosition(position);
    map.setCenter(position);
    infoWindow.setContent(browserHasGeolocation ?
                            'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);

     $(document).on('change','#country',function(){
			 $.ajax({
					url:'/getcities/'+$('#country').val(),
					success:function(result){
						$('#city').html(result);
					}
				});
		 });	
</script>
@stop