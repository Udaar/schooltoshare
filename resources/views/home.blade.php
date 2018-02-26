@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="/metronic/reset/dashboards/sp-dashboards.css">
    <link rel="stylesheet" href="/metronic/reset/modules/bim_model/viewer.css">
    <style>
        .status{
            display: none;
        }
        #viewer{
            position: absolute;
            z-index: 1;
        }
    </style>
@endpush

@section('content')
    <section class="sp-dashboard">
        {{-- Begin Page Title --}}
        <h3 class="page-title"> Property Manager Dashboard </h3>
        {{-- End Page Title --}}
        {{-- Top Boxes --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a class="dashboard-stat dashboard-stat-v2 first-color" href="#">
                        <div class="visual">
                            <i class="fa fa-building"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{count($buildings)}}">0</span>
                            </div>
                            <div class="desc"> Schools </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="dashboard-stat dashboard-stat-v2 second-color" href="#">
                        <div class="visual">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{count($funds)}}">0</span>$</div>
                            <div class="desc"> Reqested Fund </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="dashboard-stat dashboard-stat-v2 third-color" href="#">
                        
                        <div class="visual">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{$invoice->sum('amount')}}">0</span>$
                            </div>
                            <div class="desc"> Budget </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="dashboard-stat dashboard-stat-v2 fourth-color" href="#">
                        <div class="visual">
                            <i class="fa fa-mail-forward"></i>
                        </div>
                        <div class="details">
                            <div class="number"> +
                                <span data-counter="counterup" data-value="0"></span> </div>
                            <div class="desc"> 2Shar Request </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default map">
                        <div class="panel-heading">
                            <i class="fa fa-map fa-fw"></i> School
                        </div>
                        <div class="panel-body" style="height:450px;">
                            <div style="position:relative;padding:0">
                                @include('school.school_viewer')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default notification">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <div class="panel-body notification-body">
                            <div class="list-group">
                                @foreach($notifications as $notification)
                                <a href="{{$notification->url}}" class="list-group-item">
                                    <i class="fa  fa-fw"></i>{{$notification->content}}
                                    <span class="pull-right text-muted small"><em>{{$notification->created_at->diffForHumans()}}</em>
                                    </span>
                                </a>
                                @endforeach
                                <a href="/all_notifications" class="list-group-item text-center">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Content Wrapper --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default map">
                        <div class="panel-heading">
                            <i class="fa fa-map fa-fw"></i> Search For Facility
                        </div>
                        <div class="panel-body" style="height:450px;">
                            <div style="position:relative;padding:0">
                                @include('school.search')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-md-4 ifm-no-padding-right">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-reply-all fa-fw"></i> Reissued Tickets
                        </div>
                        <div class="panel-body" style="height:245px;padding:0">
                            <div style="padding:15px;height:245px">
                                <canvas id="reissuedTickets"
                                        chart-type="pie"
                                        chart-value="40,30"
                                        chart-label='Reissued, Not Reissued'
                                        chart-color='#31572C, #4F772D'
                                        chart-option="default">
                                </canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ifm-no-padding-right">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-reply-all fa-fw"></i> Current Tickets Status
                        </div>
                        <div class="panel-body" style="height:245px;padding:0">
                            <div style="padding:15px;height:245px">
                                <canvas id="ticketstatus"
                                        chart-type="pie"
                                        chart-value="40,30,10"
                                        chart-label='In Progress,Complated,On Hold'
                                        chart-color='#31572C, #4F772D'
                                        chart-option="default">
                                </canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ifm-no-padding-right">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-align-left fa-fw"></i> Tickets Per Type
                        </div>
                        <div class="panel-body" style="height:245px;padding:0">
                            <div style="padding:15px;height:245px">
                                <canvas id="ticketsPerType"
                                        chart-type="pie"
                                        chart-value="20,30,40,50"
                                        chart-label='Booking, Service, Complaint, Maintenance'
                                        chart-color='#132A13, #31572C,#4F772D, #93D327'
                                        chart-option="default">
                                </canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection

@push('scripts')
    <script src="/metronic/assets/global/plugins/chartsJS/Chart.bundle.min.js"></script>
    <script src="/metronic/assets/global/plugins/chartsJS/Chart.min.js"></script>
    <script src="/metronic/assets/global/plugins/chartsJS/Chart.PieceLabel.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6yohSe89WiHJXhZCUA6wSNQnCEzySQVc"></script>
    <script src="/js/charts.js"></script>
    <script>
    createPieChart(['reissuedTickets', 'ticketstatus', 'ticketsPerType'
        ]);
        

        $(function(){
            $('.notification-body').slimScroll({
                height: '450px',
                alwaysVisible: true
            });
        });
        $(function(){
			$('.select2').select2();
			var map;
            var marker;
            var infowindow;
            var center;
			var positions;

            function initialize() {
                center={lat: 24.461478, lng: 54.381655};
				positions=[];
				@foreach($buildings as $building)
				positions.push({lat: parseFloat("{{$building->gps_lat}}"), lng: parseFloat("{{$building->gps_long}}") });
					
				@endforeach	
				
                var mapOptions = {
                zoom: 13,
                center: center
            };

            //position={lat: 30.040106, lng: 31.242922};
            console.log('position',positions);
            map = new google.maps.Map(document.getElementById('map'), mapOptions);

			for(var i=0; i<positions.length; i++){
				marker = new google.maps.Marker({
					draggable: false,
					map: map,
					position: positions[i]
				});
			}

            infowindow = new google.maps.InfoWindow({});
        
          

            function reloadMarkers() {

                // Loop through markers and set map to null for each
                for (var i=0; i<markers.length; i++) {

                    markers[i].setMap(null);
                }

                // Reset the markers array
                markers = [];

                // Call set markers to re-add markers
                setMarkers(beaches);
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
		});

    </script>
    
@endpush