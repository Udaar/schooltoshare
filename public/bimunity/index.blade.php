<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/header-light.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2016 18:15:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o?o:n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(e,n){function t(e){function n(n,t,a){e&&e(n,t,a),a||(a={});for(var u=c(n),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(e,n){f[e]=c(e).concat(n)}function c(e){return f[e]||[]}function u(){return t(n)}var f={};return{on:a,emit:n,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=e("gos");n.exports=t()},{gos:"7eSDFh"}],ee:[function(e,n){n.exports=e("QJf3ax")},{}],3:[function(e,n){function t(e){return function(){r(e,[(new Date).getTime()].concat(i(arguments)))}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(e,n){window.NREUM[n]=t("api-"+n)}),n.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],gos:[function(e,n){n.exports=e("7eSDFh")},{}],"7eSDFh":[function(e,n){function t(e,n,t){if(r.call(e,n))return e[n];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[n]=o,o}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],D5DuLP:[function(e,n){function t(e,n,t){return r.listeners(e).length?r.emit(e,n,t):void(r.q&&(r.q[e]||(r.q[e]=[]),r.q[e].push(n)))}var r=e("ee").create();n.exports=t,t.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(e,n){n.exports=e("D5DuLP")},{}],XL7HBI:[function(e,n){function t(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");n.exports=t},{gos:"7eSDFh"}],id:[function(e,n){n.exports=e("XL7HBI")},{}],G9z0Bl:[function(e,n){function t(){var e=d.info=NREUM.info,n=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&n){c(p,function(n,t){n in e||(e[n]=t)});var t="https"===s.split(":")[0]||e.sslForHttp;d.proto=t?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=d.proto+e.agent,n.parentNode.insertBefore(r,n)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=e("handle"),c=e(1),u=window,f=u.document;e(2);var s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-686.min.js"},d=n.exports={offset:i(),origin:s,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),u.addEventListener("load",t,!1)):(f.attachEvent("onreadystatechange",r),u.attachEvent("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,n){n.exports=e("G9z0Bl")},{}],12:[function(e,n){function t(e,n){var t=[],o="",i=0;for(o in e)r.call(e,o)&&(t[i]=n(o,e[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],13:[function(e,n){function t(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(0>o?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=t},{}]},{},["G9z0Bl"]);</script>
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="./vendor/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/main.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">	
  	<link rel="stylesheet" href="./css/style.css" type="text/css" />
	<link rel="stylesheet" href="./vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/media.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="./vendor/jquery.js"></script>

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
						<a href="index.html" class="standard-logo" data-dark-logo="./images/logo.png"><img src="./images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="./images/logo.png"><img src="./images/logo.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">
						<ul>
							<li class="current">
							<a class="nav-link" data-scroll href="#header"><div>Home</div></a>
							</li>
							<li class="mega-menu">
							<a class="nav-link" data-scroll href="#logic"><div>Our Logic</div></a>
							</li>
							<li class="mega-menu">
							<a class="nav-link" data-scroll href="#platform"><div>Platforms</div></a>
							</li>
							<li class="mega-menu">
							<a class="nav-link" data-scroll href="#prototyps"><div>Prototyps</div></a>
							</li>
							<li class="mega-menu">
							<a class="nav-link" data-scroll href="#features"><div>Features</div></a>
							</li>
							<li class="mega-menu">
							<a class="nav-link" data-scroll href="#users"><div>Users</div></a>
							</li>
						</ul>
					</nav><!-- #primary-menu end -->
				</div>
			</div>
		</header><!-- #header end -->

    <!-- Slider
    ============================================= -->
		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('./images/header.jpg');">
						<div class="overlay">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Welcome to BIMMUNITY</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">BIMMUNITY builds upon the merger of several intertwined concepts and constituents that shape its unique integrated nature</p>
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

		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">

				<!-- Start Our Logic Section -->
				<section id="logic" class="logic">
					<div class="container-fluid">
						<div class="row clearfix" style="background-color:#d8e4f0">
							<div class="col-md-6 eq-child relative dark-bg hidden-sm hidden-xs">
								<div class="img-container">
									<img src="./images/logic.png" class="img-responsive" alt="">
								</div>
							</div>
							<div class="col-md-6 eq-parent relative padding-50-all">
								<div class="text-center">
									<h3 class="uppercase">Our Logic</h3>
									<p>BIMMUNITY builds upon the merger of several intertwined concepts and constituents that shape its unique integrated nature</p>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="fa fa-life-bouy red"></i>
										</div>
										<h3>
											<span class="main-color bold">Bimm</span><span class="dark-grey light">unity</span>
										</h3>
										<p class="padding-42-left">A platform that relies primarily on concepts of “Building Information Modeling & Management”.</p>
									</div>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="icon-equalizer icons rotate-90 green"></i>
										</div>
										<h3>
											<span class="dark-grey light">Bimm</span><span class="main-color bold">unity</span>
										</h3>
										<p class="padding-42-left">A <i class="bold">unified</i> platform that incorporates a multitude of concepts, stakeholders, viewpoints, technologies and methods.</p>
									</div>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="icon-diamond icons blue"></i>
										</div>
										<h3>
											<i class="main-color light">Co-</i><span class="main-color bold">mmunity</span>
										</h3>
										<p class="padding-42-left">A sense of <i class="bold">community</i> among its different users that are blended into a unified support system.</p>
									</div>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="fa fa-bullhorn yellow"></i>
										</div>
										<h3>
											<span class="dark-grey light">B</span><span class="main-color bold">immunity</span>
										</h3>
										<p class="padding-42-left">A sense of <i class="bold">immunity</i>, where cost, energy savings, and asset protection are of the highest interest and value to our clients.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Our Logic Section -->

				<!-- Start Our Platform Section -->
				<section id="platform" class="platform">
					<div class="container-fluid">
						<div class="row clearfix" style="background-color:#d8e4f0">
							<div class="col-md-6 eq-parent relative padding-50-all">
								<div class="text-center">
									<h3 class="uppercase">Platforms</h3>
									<p>A telegraph wire, or a strand of cobweb, it is all the same. Likewise a fish is technically fast when it bears a</p>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="fa fa-cubes red"></i>
										</div>
										<h3>
											<span class="dark-grey bold">BIM</span><span class="dark-grey light">model</span>
										</h3>
										<p class="padding-42-left">Full 3D navigation and visualization – improved design documentation – live coordination - information take-off.</p>
									</div>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="icon-layers icon green"></i>
										</div>
										<h3>
											<span class="dark-grey bold">GIS</span><span class="dark-grey light">-Database</span>
										</h3>
										<p class="padding-42-left">Relational database structure – geospatial analysis/modeling – scalability – positioning – server integration – integration with various FM tools (CAFM/IWMS/EDMS).</p>
									</div>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="fa fa-globe blue"></i>
										</div>
										<h3>
											<span class="dark-grey bold">Web based</span><span class="dark-grey light">-Application</span>
										</h3>
										<p class="padding-42-left">Real time task management/CRM – variety of interfaces – scalability  - flexible access.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 eq-child relative dark-bg hidden-sm hidden-xs">
								<div class="img-container">
									<img src="./images/platforms.png" class="img-responsive" alt="">
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Our Platform Section -->

				<!-- Start Our Prototypes Section -->
				<section id="prototyps" class="prototypes padding-50-all">
					<div class="container-fluid">
						<h3 class="uppercase text-center">Prototypes</h3>
						<div class="row clearfix">
							<div class="col-md-3">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									<div class="fbox-icon yellow-border">
										<i class="fa fa-home i-alt yellow-bg"></i>
									</div>
									<h3>Property Management<span class="subtitle"> Operation, control, management and oversight of real estate</span></h3>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									<div class="fbox-icon dark-border">
										<i class="fa fa-dollar i-alt dark-bg"></i>
									</div>
									<h3>Asset Management<span class="subtitle"> Effective deployment, operation, disposal and control of assets</span></h3>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									<div class="fbox-icon red-border">
										<i class="fa fa-wrench i-alt red-bg"></i>
									</div>
									<h3>Maintenance Management<span class="subtitle"> Visual management, monitoring and resolution of maintenance work orders</span></h3>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									<div class="fbox-icon blue-border">
										<i class="icon-printer icons i-alt blue-bg"></i>
									</div>
									<h3>Inventory Management<span class="subtitle"> Management and operation of space and equipment inventory</span></h3>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-md-3">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									<div class="fbox-icon red-border">
										<i class="icon-bag icons i-alt red-bg"></i>
									</div>
									<h3>Building Catalog<span class="subtitle">Dynamic interface between buildings and guest users</span></h3>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									<div class="fbox-icon light-green-border">
										<i class="fa fa-money i-alt light-green-bg"></i>
									</div>
									<h3>Tenant Billing<span class="subtitle">Management of property, tenant, owner and lease information</span></h3>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									<div class="fbox-icon green-border">
										<i class="icon-calendar icons i-alt green-bg"></i>
									</div>
									<h3>Facility Booking<span class="subtitle">Web enabled facility reservation and scheduling</span></h3>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									<div class="fbox-icon blue-border">
										<i class="fa fa-info i-alt blue-bg"></i>
									</div>
									<h3>Help Desk<span class="subtitle">Record of events, inquiries and customer satisfaction</span></h3>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Our Prototypes Section -->

				<!-- Start Our Features & Modules Section -->
				<section id="features" class="features">
					<div class="container-fluid">
						<h3 class="uppercase text-center padding-50-all">Modules &amp; Features</h3>
						<div class="row clearfix">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									<li data-target="#carousel-example-generic" data-slide-to="3"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div class="item active padding-50-1ll">
										<div class="container-fluid">
											<div class="row">
												<div style="height:300px" class="col-md-6 relative yellow-bg padding-50-all">
													<div class="">
														<h4 class="uppercase" style="color:#fff!important">Property Management</h4>
														<ul class="text-left" style="padding-left:20px;color:#fff;font-size:13px">
															<li>Tracking budgets, expenses, invoices, tenant payments.</li>
															<li>Statistical analysis, monitoring and reporting on business expenses via interactive dashboard.</li>
															<li>Integrated platform for communication with facility managers, tenants and service providers.</li>
															<li>Comprehensive reports and screening of managers, tenants, and service providers.</li>
															<li>Visual and user friendly interface for tracking properties and active operations within properties in real time.</li>
															<li>Integrated management of maintenance requests, work orders, rental listings, inspection and financial data.</li>
														</ul>
													</div>
												</div>
												<div style="height:300px" class="col-md-6 dark-bg relative padding-50-all">
													<div class="">
														<h4 class="uppercase" style="color:#fff!important">Asset Management</h4>
														<ul class="text-left" style="padding-left:20px;color:#fff;font-size:13px">
															<li>Tracking financial, contractual and inventory details of all assets throughout their lifecycle.</li>
															<li>Record of all maintenance activity and service.</li>
															<li>Visual and user friendly interface of asset location, status and history.</li>
															<li>Monitoring of key performance indicators via advanced analytics.</li>
															<li>Automated asset lifecycle processes to avoid redundancies.</li>
															<li>Optimization by identifying and removing underutilized assets, and retiring low value contracts.</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="container-fluid">
											<div class="row">
												<div style="height:300px" class="col-md-6 red-bg relative padding-50-all">
													<div class="">
														<h4 class="uppercase" style="color:#fff!important">Maintenance Management</h4>
														<ul class="text-left" style="padding-left:20px;color:#fff;font-size:13px">
															<li>Tracking, maintenance and management of assets and properties.</li>
															<li>Generation and management of breakdown maintenance work orders.</li>
															<li>Integrated ticketing platform between owners, facility managers, service providers and tenants.</li>
															<li>Visual issuing, monitoring, tracking, and completion of tickets and work orders.</li>
															<li>User friendly ticketing and performance dashboards for all stakeholders.</li>
															<li>Customized and scalable reporting for owners, managers, tenants and service providers.</li>
														</ul>
													</div>
												</div>
												<div style="height:300px" class="col-md-6 blue-bg relative padding-50-all">
													<div class="">
														<h4 class="uppercase" style="color:#fff!important">Inventory Management</h4>
														<ul class="text-left" style="padding-left:20px;color:#fff;font-size:13px">
															<li>Inventory and storage module to manage spare parts.</li>
															<li>Asset tracking with asset valuation, cost history, warranty, vendor and technical documentation.</li>
															<li>Resource scheduling, and spare parts requirement planning.</li>
															<li>Vendor database, purchased parts, purchasing history, rate contracts, service level agreements.</li>
															<li>Purchase requisitions, purchase orders, receipt of goods, return of goods.</li>
															<li>Inventory tracking with vendors, costs, reorder quantities, stock location, warehousing.</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="container-fluid">
											<div class="row">
												<div style="height:300px" class="col-md-6 red-bg relative padding-50-all">
													<div class="">
														<h4 class="uppercase" style="color:#fff!important">Building Catalog</h4>
														<ul class="text-left" style="padding-left:20px;color:#fff;font-size:13px">
															<li>Dynamic visual interface between buildings and guest users.</li>
															<li>Visual history and archival of building data, amenities and facilities.</li>
															<li>Record and tracking of guest interactions with building data.</li>
															<li>Matching guest user preferences and requirements via dynamic links.</li>
															<li>Integration with prediction models, analysis and statistical data.</li>
															<li>Interactive notifications and alerts to guest users based on selections and preferences.</li>
														</ul>
													</div>
												</div>
												<div style="height:300px" class="col-md-6 eq-parent light-green-bg relative padding-50-all">
													<div class="">
														<h4 class="uppercase" style="color:#fff!important">Tenant Billing</h4>
														<ul class="text-left" style="padding-left:20px;color:#fff;font-size:13px">
															<li>Management of tenant payments and periodical bill tracking.</li>
															<li>Automatic bill generation.</li>
															<li>Management of property, tenant, owner and lease data.</li>
															<li>Management of bill registers, statements and ledgers.</li>
															<li>Space occupancy and vacancy analysis.</li>
															<li>Management of tenant check-in, check-out and service subscriptions.</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="container-fluid">
											<div class="row">
												<div style="height:300px" class="col-md-6 green-bg relative padding-50-all">
													<div class="">
														<h4 class="uppercase" style="color:#fff!important">Facility Booking</h4>
														<ul class="text-left" style="padding-left:20px;color:#fff;font-size:13px">
															<li>Visual and user friendly booking of spaces and events.</li>
															<li>Billing of reservations and cancellations.</li>
															<li>Email and SMS notifications of bookings, approvals and cancellations.</li>
															<li>Confirmation, rejection, suggestion of alternate facility booking.</li>
															<li>Real time and interactive scheduling of events.</li>
															<li>Space utilization analysis and customization.</li>
														</ul>
													</div>
												</div>
												<div style="height:300px" class="col-md-6 blue-bg relative padding-50-all">
													<div class="">
														<h4 class="uppercase" style="color:#fff!important">Help Desk</h4>
														<ul class="text-left" style="padding-left:20px;color:#fff;font-size:13px">
															<li>Online call booking, emails and control system alarms.</li>
															<li>Register problems, job requests and calls.</li>
															<li>Event record throughout call lifecycle.</li>
															<li>Call response analysis and service level analysis.</li>
															<li>FAQs and links.</li>
															<li>Customer satisfaction analysis and history.</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>
				<!-- End Our Features & Modules Section -->

				<!-- Start Our Users Section -->
				<section id="users" class="users">
					<div class="container-fluid">
						<div class="row clearfix" style="background-color:#d8e4f0">
							<div class="col-md-6 eq-child relative dark-bg hidden-sm hidden-xs">
								<div class="img-container">
									<img src="./images/users.png" class="img-responsive" alt="">
								</div>
							</div>
							<div class="col-md-6 eq-parent relative padding-50-all">
								<div class="text-center">
									<h3 class="uppercase">Users</h3>
									<p>Five interfaces for five users</p>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="fa fa-male blue"></i>
										</div>
										<h3>
											Property Manager
										</h3>
										<p class="padding-42-left">Income / Expenses / Managing properties / Expectations Models / Tracking Tasks.</p>
									</div>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="fa fa-male red"></i>
										</div>
										<h3>
											Tenant
										</h3>
										<p class="padding-42-left">Phenomenon whereby something new and somehow.</p>
									</div>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="fa fa-male green"></i>
										</div>
										<h3>
											Facility Manager
										</h3>
										<p class="padding-42-left">Facility Management / Task Management.</p>
									</div>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="fa fa-male yellow"></i>
										</div>
										<h3>
											Services Provider
										</h3>
										<p class="padding-42-left">Task Management / Monitoring stocks.</p>
									</div>
									<div class="feature-box fbox-plain fbox-small fbox-dark text-left">
										<div class="fbox-icon">
											<i class="fa fa-male dark-grey"></i>
										</div>
										<h3>
											Guest
										</h3>
										<p class="padding-42-left">Advertising / Booking Facilities / Follow / Asking Questions.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Our Users Section -->

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
					<img src="./images/logo.png" alt="" class="footer-logo">

					Copyrights &copy; 2017 All Rights Reserved by BIMMUNITY.
				</div>

				<div class="col_half col_last tright">
					<div class="copyrights-menu copyright-links fright clearfix">
						<a class="nav-link" data-scroll href="#header">Home</a>/
						<a class="nav-link" data-scroll href="#about">Our Logic</a>/
						<a class="nav-link" data-scroll href="#core">Platforms</a>/
						<a class="nav-link" data-scroll href="#concepts">Prototyps</a>/
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
	<script type="text/javascript" src="./vendor/smooth-scroll-master/dist/js/smooth-scroll.min.js"></script>
	<script type="text/javascript" src="./js/functions.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
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
	</script>
</body>

<!-- Mirrored from themes.semicolonweb.com/html/canvas/header-light.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2016 18:15:14 GMT -->
</html>