<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/header-light.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2016 18:15:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o?o:n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(e,n){function t(e){function n(n,t,a){e&&e(n,t,a),a||(a={});for(var u=c(n),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(e,n){f[e]=c(e).concat(n)}function c(e){return f[e]||[]}function u(){return t(n)}var f={};return{on:a,emit:n,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=e("gos");n.exports=t()},{gos:"7eSDFh"}],ee:[function(e,n){n.exports=e("QJf3ax")},{}],3:[function(e,n){function t(e){return function(){r(e,[(new Date).getTime()].concat(i(arguments)))}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(e,n){window.NREUM[n]=t("api-"+n)}),n.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],gos:[function(e,n){n.exports=e("7eSDFh")},{}],"7eSDFh":[function(e,n){function t(e,n,t){if(r.call(e,n))return e[n];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[n]=o,o}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],D5DuLP:[function(e,n){function t(e,n,t){return r.listeners(e).length?r.emit(e,n,t):void(r.q&&(r.q[e]||(r.q[e]=[]),r.q[e].push(n)))}var r=e("ee").create();n.exports=t,t.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(e,n){n.exports=e("D5DuLP")},{}],XL7HBI:[function(e,n){function t(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");n.exports=t},{gos:"7eSDFh"}],id:[function(e,n){n.exports=e("XL7HBI")},{}],G9z0Bl:[function(e,n){function t(){var e=d.info=NREUM.info,n=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&n){c(p,function(n,t){n in e||(e[n]=t)});var t="https"===s.split(":")[0]||e.sslForHttp;d.proto=t?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=d.proto+e.agent,n.parentNode.insertBefore(r,n)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=e("handle"),c=e(1),u=window,f=u.document;e(2);var s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-686.min.js"},d=n.exports={offset:i(),origin:s,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),u.addEventListener("load",t,!1)):(f.attachEvent("onreadystatechange",r),u.attachEvent("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,n){n.exports=e("G9z0Bl")},{}],12:[function(e,n){function t(e,n){var t=[],o="",i=0;for(o in e)r.call(e,o)&&(t[i]=n(o,e[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],13:[function(e,n){function t(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(0>o?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=t},{}]},{},["G9z0Bl"]);</script>
	<meta name="author" content="SemiColonWeb" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Stylesheets
	============================================= -->

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/bimunity/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/bimunity/vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/metronic/assets/global/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/metronic/assets/global/plugins/select2/css/select2-bootstrap.min.css">
    <link rel="stylesheet" href="/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/metronic/assets/global/css/components.min.css">
    <link rel="stylesheet" href="/metronic/assets/pages/css/pricing.min.css">
	<link rel="stylesheet" href="/metronic/assets/layouts/layout/css/themes/darkblue.min.css">
    <link rel="stylesheet" href="/remodal/dist/remodal.css">
    <link rel="stylesheet" href="/remodal/dist/remodal-default-theme.css">
    <link rel="stylesheet" href="/jquery-bar-rating-master/dist/themes/fontawesome-stars-o.css">
	<link rel="stylesheet" href="/bimunity/css/main.css" />
	<link rel="stylesheet" href="/bimunity/css/style.css" />
	<link rel="stylesheet" href="/bimunity/css/profile.css">
	<link rel="stylesheet" href="/metronic/assets/global/plugins/simple-line-icons/simple-line-icons.css">
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
	<link rel="stylesheet" href="/bimunity/css/media.css">

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script src="/jwplayer-7.11.0/jwplayer.js"></script>
	<script type="text/javascript">jwplayer.key="vmsCtZre+hEysIbsDV0SrTXBISKXWQnyH2x9Vw==";</script>
	<script type="text/javascript" src="/bimunity/vendor/jquery.js"></script>
	<script src="/metronic/assets/pages/scripts/login.min.js" type="text/javascript"></script>
	<!-- Document Title
	============================================= -->
	<title>Schools</title>


</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('layouts.header_2')

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
                <div class="container">
                    <h3 class="name-location">{{$building->name}} , {{$building->address}}</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="right">
                                <div class="property-info">
									<div class="rate clearfix">
									
									<a data-remodal-target="modal">
							
										<div class="rate-group pull-left">
											@for ($i = 0; $i < $building->rateavg; $i++)
												<i class="fa fa-star rate-yellow"></i>
											@endfor
											@for ($i = 1; $i < (5 - $building->rateavg); $i++)
												<i class="fa fa-star rate-grey"></i>
											@endfor
										</div>
								
									</a>
									
									<div class="rate-value pull-right bold">
										<span>{{$building->rateavg}}/5</span>
									</div>
								</div>
                                    <img src=" @if( isset($building->profilePicture) && file_exists(public_path( $building->profilePicture )) )
                                                    /{{$building->profilePicture}}
                                                @else
                                                    {{  asset(config('ifm.buildings.image_placeholder')) }}
                                                @endif" alt="">
                                </div>
                                <div class="property-follow">
									@if(Auth::check())
									<a href="/follow/{{$building->id}}" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small nomargin" value="submit">Follow School</a>
									@else
									<a href="{{ route('social.redirect', ['provider' => 'google','id'=>$building->id]) }}" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small nomargin" value="submit">Follow Building</a>
									@endif    
									<a href="/follow/{{$building->id}}" class="button button-small" value="submit">Booking School Facility</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="company-map">
                                <div id="map"></div>
                            </div>
                            <div class="facilities">
								<div class="row">
									<div class="col-xs-12">
										<h4 class="">School Facilities</h4>
									</div>
								</div>
                                <div class="row">
									<div class="col-xs-12">
										@foreach($facliltes as $facility)
											<div class="facility-col text-center">
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
							<div class="events">
                                <h4 class="">Current Events</h4>
                                <div class="row is-flex">     
									@foreach($building->events as $event)
										@if($event->type == 'workshop')  
											<div class="col-lg-4">
												<div class="event-box workshop">
													<div class="event-top-box">
														<div class="event-type">
															<img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADSSURBVDhPlY2hCgJBFEVHg3GboMmfMBgtgkWwaLUKBpvNahSD/oB/YrXaTGZBEIOWdcdzd94KIrLugcvMvHfPrsvw3pdJmwySJOmQhma2zodyH+nE6TnPZGKrfChXyV6y4D6zVT70awi3oBaQ6ZYoH4KWineOiq1/Q7FJ4qAFeG9IzyqfsNeflqRLhuRCFuQZ9PQDY6sHmEla2/JBJEfacR41F9ynqSB4vyXjyrtla4kjEpO5jfKlDGZ1u/4vfUFpZYL4TxIUd4UlQTki20KSc+4Fcb47gDyDH6EAAAAASUVORK5CYII=">
															<span>WorkShop</span>
														</div>
														<div class="event-title">
															<p class="text-center">{{$event->name}}</p>
														</div>
														<div class="event-avatar">
															<img src="{{$event->school->profilePicture}}" alt="">
														</div>
													</div>
													<div class="event-details">
														<div class="speaker text-center">
															<p>
																<span>Speaker</span>
																{{$event->speaker}}
															</p>
														</div>
														<div class="attend-details text-center">
															<label>date</label>
															<span>{{$event->date}}</span>
														</div>
														<div class="attend-details text-center">
															<label>time</label>
															<span>{{$event->time}}</span>
														</div>
														<div class="attend-details text-center">
															<label>duration</label>
															<span>{{$event->duration}} {{$event->d_type}}</span>
														</div>
														<div class="attend-details text-center">
															<label>location</label>
															<span>{{$event->location}}</span>
														</div>
													</div>
												</div>
											</div>   
											
										@else	
											<div class="col-lg-4">
												<div class="event-box keynote">
													<div class="event-top-box">
														<div class="event-type">
															<i class="fa fa-microphone"></i>
															<span>Keynote</span>
														</div>
														<div class="event-title">
															<p class="text-center">{{$event->name}}</p>
														</div>
														<div class="event-avatar">
															<img src="{{$event->school->profilePicture}}" alt="">
														</div>
													</div>
													<div class="event-details">
														<div class="speaker text-center">
															<p>
																<span>Speaker</span>
																{{$event->speaker}}
															</p>
														</div>
														<div class="attend-details text-center">
															<label>date</label>
															<span>{{$event->date}}</span>
														</div>
														<div class="attend-details text-center">
															<label>time</label>
															<span>{{$event->time}}</span>
														</div>
														<div class="attend-details text-center">
															<label>duration</label>
															<span>{{$event->duration}} {{$event->d_type}}</span>
														</div>
														<div class="attend-details text-center">
															<label>location</label>
															<span>{{$event->location}}</span>
														</div>
													</div>
												</div>
											</div>
										@endif	
									@endforeach	
								</div>
                            </div>
                            <div class="image-gallery">
                                <h4 class="">Gallery</h4>
                                <div class="row">
                                    @if(count($building->profile)>0)
                                            @foreach($building->profile as $image)
                                                <div class="col-lg-15">
                                                    <div class="gallery-item">
                                                        <a href="/{{$image->path}}" data-fancybox="gallery">
                                                            <img src="/{{$image->path}}">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                    @else
                                        <p>NO Gallery</p>
                                    @endif            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	@include('layouts.footer_2')

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class=""><i class="fa fa-angle-up"></i></div>

    <!-- Start Remdal -->
    <div class="remodal" data-remodal-id="modal">
    {!! Form::open(['url' => 'rate','id'=>'rateform']) !!}
        <input type="hidden" name="model" value="App\Models\Building">
        <input type="hidden" name="module_id" value="{{$building->id}}">
            <button data-remodal-action="close" class="remodal-close"></button>
            <h5>Rate It</h5>
            <select id="example-fontawesome-o" name="rate" data-current-rating="5.6" autocomplete="off">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <div class="form-group">
                <textarea class="rate-comment" name="comment" id="" placeholder="Comment ..."></textarea>
            </div>
            <button data-remodal-action="confirm" id="submitratebtn" class="remodal-confirm pull-right">Rate</button>
    {!! Form::close() !!}
    </div>
    <!-- End Remdal -->

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="/bimunity/vendor/smooth-scroll-master/dist/js/smooth-scroll.min.js"></script>
    <script src="/metronic/assets/global/plugins/select2/js/select2.full.min.js"></script>
    <script src="/metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/remodal/dist/remodal.min.js"></script>
    <script src="/jquery-bar-rating-master/dist/jquery.barrating.min.js"></script>
    <script src="/jquery-bar-rating-master/examples.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6yohSe89WiHJXhZCUA6wSNQnCEzySQVc&callback=initMap">
    </script>
	<script type="text/javascript" src="/bimunity/js/functions.js"></script>
	<script type="text/javascript" src="/bimunity/js/script.js"></script>
	<script>
		smoothScroll.init({
			speed: 600,
			offset: 10,
			callback: function(){
				var hash = window.location.hash;
				$('li.current').removeClass('current');
				$('.nav-link[href^='+hash+']').parent().addClass('current');
			}
		});
		$(function(){
            $('.select2').select2();
            $('.property-reviews').slimScroll({
                height: '337px',
                railVisible: true,
                alwaysVisible: true
            });
        });
        function initMap() {
            var uluru = {lat: {!!$building->gps_lat!!}, lng: {!!$building->gps_long!!}};
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
      }
      $('#submitratebtn').on('click',function(e){
          e.preventDefault();
          $('#rateform').submit()

      });
	</script>
	<!--<script>
		$('#template-contactform').submit(function(e){
			e.preventDefault();

			var formData = {
            'name'              : $('#template-contactform-name').val(),
            'email'             : $('#template-contactform-email').val(),
            'message'    : $('#template-contactform-message').val()
		
        };
        $.ajax({
            type        : 'POST', 
            url         : 'sendemail', 
            data        : JSON.stringify(formData),
			dataType    : "json",
            encode      : true,
			success     :function(data) {
							console.log(data); 
						}	
        })
         });
	</script>-->
</body>

<!-- Mirrored from themes.semicolonweb.com/html/canvas/header-light.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2016 18:15:14 GMT -->
</html>