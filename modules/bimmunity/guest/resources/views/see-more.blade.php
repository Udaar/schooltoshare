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
	<link rel="stylesheet" href="/metronic/assets/global/css/components.min.css">
	<link rel="stylesheet" href="/metronic/assets/layouts/layout/css/themes/darkblue.min.css">
	<link rel="stylesheet" href="/bimunity/css/main.css" />
	<link rel="stylesheet" href="/bimunity/css/style.css" />
	<link rel="stylesheet" href="/bimunity/css/guest.css">
	<link rel="stylesheet" href="/metronic/assets/global/plugins/simple-line-icons/simple-line-icons.css">
    <style>
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
	<title>BIMMUNITY</title>


</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="fa fa-bars fa-2x"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/" class="standard-logo" data-dark-logo="/bimunity/images/logo.png"><img src="/bimunity/images/logo.png" alt="Canvas Logo"></a>
						<a href="/" class="retina-logo" data-dark-logo="/bimunity/images/logo.png"><img src="/bimunity/images/logo.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">
						@include('guest::menu')
					</nav><!-- #primary-menu end -->
				</div>
			</div>
		</header><!-- #header end -->

    <!-- Slider
    ============================================= -->
		{{-- <section id="slider" class="swiper_wrapper full-screen clearfix">
			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('/bimunity/images/header.jpg');">
						<div class="overlay">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Welcome to BIMMUNITY</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">BIMMUNITY builds upon the merger of several intertwined concepts and constituents that shape its unique integrated nature</p>
									@if(\Auth::user())
										<a href="/login" class="button button-3d button-blue nomargin"><i class="fa fa-user"></i> Dashboard</a>
									@else
										<a href="/login" class="button button-3d button-blue nomargin"><i class="fa fa-user"></i> Login</a>
										<a href="/login#register" class="button button-3d dark-bg nomargin"><i class="fa fa-pencil"></i> Register</a>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<script>
				jQuery(document).ready(function($){
					swiperSlider = new Swiper('.swiper-parent',{
						paginationClickable: false,
						slidesPerView: 1,
						grabCursor: true,
						onSwiperCreated: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						},
						onSlideChangeStart: function(swiper){
							$('#slide-number-current').html(swiper.activeIndex + 1);
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var elementAnimation = $toAnimateElement.attr('data-caption-animate');
								$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
							});
						},
						onSlideChangeEnd: function(swiper){
							$('#slider .swiper-slide').each(function(){
								if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
							});
							$('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
								if($(this).find('video').length > 0) {
									if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
								}
							});
							if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

							$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						}
					});

					$('#slider-arrow-left').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipePrev();
					});

					$('#slider-arrow-right').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipeNext();
					});

					$('#slide-number-current').html(swiperSlider.activeIndex + 1);
					$('#slide-number-total').html(swiperSlider.slides.length);
				});
			</script>

		</section><!-- #slider end --> --}}

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="row filters">
					<div class="col-lg-11">
						<div class="row">
							<input type="hidden" id="Propertytype" value="{{$searchtype}}">
									
							<div class="col-lg-4">
								{!! Form::select('country_id', \App\Country::all()->pluck('name','id'), null, ['class' => 'form-control select2','placeholder'=>'Country','id'=>'country']) !!}
							</div>
							<div class="col-lg-4">
								<select id="city" class="form-control select2" placeholder="City">
									<option value="0">City</option>
								</select>
							</div>
							<div class="col-lg-4">
								<input type="text" id="bname" class="form-control" placeholder="Name">
							</div>	
						</div>
					</div>
					<div class="col-lg-1">
						<button id="searchbtn" name="quick-contact-form-submit" class="button button-small button-3d nomargin">filter</button>
					</div>
				</div>
				<div id="property" class="container-fluid company-wrap">
					<!--<div class="row filters">
						<div class="col-lg-3">
							<select id="single" class="form-control select2">
								<option selected>Search for a property</option>
								<option>Alaska</option>
								<option>Hawaii</option>
							</select>
						</div>
						<div class="col-lg-3">
							<select id="single" class="form-control select2">
								<option selected disabled>Country</option>
								<option>Alaska</option>
								<option>Hawaii</option>
							</select>
						</div>
						<div class="col-lg-3">
							<select id="single" class="form-control select2">
								<option selected disabled>City</option>
								<option>Alaska</option>
								<option>Hawaii</option>
							</select>
						</div>
						<div class="col-lg-3">
							<select id="single" class="form-control select2">
								<option selected disabled>Name</option>
								<option>Alaska</option>
								<option>Hawaii</option>
							</select>
						</div>
					</div>-->
					<p class="top-p"><span class="bold">TOP</span> {{$type}}</p>
					@if($type=='Properties')
					    @include('guest::see_more_building')
					@else
						@include('guest::see_more_partial')
					@endif
				</div>
			</div>
		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Footer
		============================================= -->
	<footer id="footer" class="dark">

		<!-- Copyrights
		============================================= -->
		<div id="copyrights">

			<div class="container clearfix">

				<div class="col_half">
					<img src="/bimunity/images/logo.png" alt="" class="footer-logo">

					Copyrights &copy; 2017 All Rights Reserved by BIMMUNITY.
				</div>

				<div class="col_half col_last tright">
					<div class="copyrights-menu copyright-links fright clearfix">
						<a class="nav-link" data-scroll href="#header">Home</a>/
						<a class="nav-link" data-scroll href="#about">Our Logic</a>/
						<a class="nav-link" data-scroll href="#core">Platforms</a>/
						<a class="nav-link" data-scroll href="#concepts">Prototypes</a>/
						<a class="nav-link" data-scroll href="#prototyps">Features</a>/
						<a class="nav-link" data-scroll href="#team">Users</a>
					</div>
				</div>

			</div>

		</div><!-- #copyrights end -->

	</footer><!-- #footer end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class=""><i class="fa fa-angle-up"></i></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="/bimunity/vendor/smooth-scroll-master/dist/js/smooth-scroll.min.js"></script>
	<script src="/metronic/assets/global/plugins/select2/js/select2.full.min.js"></script>
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
		});
		$(document).on('change','#country',function(){
			 $.ajax({
					url:'/getcities/'+$('#country').val(),
					success:function(result){
						$('#city').html(result);
					}
				});
		 });

		$('#searchbtn').on('click',function(){
			$.ajax({
					url:'/search/'+$('#Propertytype').val()+'/'+$('#country').val()+'/'+$('#city').val()+'/'+$('#bname').val(),
					success:function(result){
						$('#property').html(result);
					}
				});
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