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
										<div class="facility-col text-center">
											<div class="facility-item two-word">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJRSURBVEhL7VbPaxNBFF5v6sWLF2tRVMy+2VJQiuJBKGixuzNbQfCkVxFURFAEFbQo0oIIgoIg7anQv8CAF0FQ/B2wzW6it3gQD4KgCCIo1u9Nnk2VCWa3ZHPxwcdM3vfm+yYzs7vj9TwqI5vXpMY/kxi6lxpVaYNyauj8m7i0VoYtL6qGhhKj3kN4oRNgch/TKNgjw/PF6/1+H8Q+/C3+LySaviThwBaRyR6Y/U2XcIe4KzLZA0vccAhmQLBTpLIFDst3t2DHKItUtnAI5UCOf+0WygYctPsLnrdCJDsLl1AuaBrPZO4UyY/HaUQnapGKakaNWMRqbz2ikti1wjG4K8B2pInxR8W2OGMLrX7gIB4u3pih1df5cLC/eGOGpku9MeZXrSPZdeCgPfpvXAh6b4xv8mV8Ho8yEq0mmjncvbR6Z685vzmjTsnA53gk5ppCNC0as606e29b5KDzoMWp2UXj+cgftG8TBPdF6ALal2gbQnmVeGi1CM40jVg0CG19REekDJp01eZi2mdboyaF4ovHMafx3FhpkxWM6TQXoF8VyoblNN1GOwWRb2kc7La5yD8kJR74c5xL4oEdljN0Uaj2xvVRWmcHoQBtGcv2TCgbyH+G0DVsyS3wn/CPt9n62B+TEhgHJzmHSW2wnFZnhWpv/ORg/yoU3qmHtAsFx5cO4sB+3cB1+AADIpOvzNb1XL9UoxrTMOcawxtXcsu/hWoZo/OzFqrtku968GrA+CHvxwuYP+WZFQJDb9Fet3uKzpU/yG4CjyRvgSxA0eF5vwA2mmo1NzDJeAAAAABJRU5ErkJggg==">
													<p>Music<br>Room</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJNSURBVEhL7VY9aBRBFF47tbGx8QdBBDtBEcVCCKho4r45DWijrQhRRJLc7p4BPSKiIIKgIIhWQgqF3L7dCDZCQBF/CxF7LcRCCCiCCIrxey8v3IkT2T25OwsffMzc+95838zs7ewEPY/kzsFlUeZGY6Z7aF/4QXfjzJ0ayWm5Dfu7qKXhZoi+h+hsQcwkmdthw9uLiCsrI3YfPOJ/BCb6udrYv85kyge29opPuBCYpkymfGDmb7yiRdEIt5pUucA2f/MKFoT84UyqXPjESqOdVXuFyoLd/WA2WGSSxcIr1A6Y6qXMvSJtAs/7UcJ0PM5poMqVXYIop521xsB6s2uGT6ATiJhex2m4x2y7ZzwH+h5xeLgHxgL6Ek/2r+6BsW77mZ4Y61HrJToMnJYP/xt3Bf+E8TjuVEcVTOc1h7sXDv936M80ucpJHZi5pxj8UvtMNy03MV+nY3/lpuc5YKJpnO7boKcJQvpWPIaX/blcFIwK6jkt1Xp2t0RA+tXM9Wt9SkesDJcLd065nHab1gWjxG/IazyaubWaYxqRAhi/MkpDhZiuob2BCXxNcto+p0GHrCTAh6ImuVpOW5TL3GmjFjYemxxcYcVDcrvAqp8YpQGzT+Auwvwq+I/VdO9GqU9SclYSYBdOaC6nNdKiNjJqYePh2weWYLXXkd+GT9qx1kES+H25yuGgQLZweCpcpfUtGhjXJ7n6dN9iaeW3US3G7H4kXNlk+Y6H7cYDuew9wyoe66y7AvcW7SV9pjA++3tBZyCvpDwC24BuRxD8BBH+2hLoO/CBAAAAAElFTkSuQmCC">
													<p>Music<br>Room</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item two-word">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMSSURBVEhLtVdLaBNRFB0/KIpfRFdu1Jh5b0pbpAsXolG0Nnkz0YJWVCj+QF10oaD4AakgoqBW0JUbRVBRceGuiuIHwYJWm85MKiriTqwiflBREOO5k5uQSQebdDIHLknevfec9+57785EqwRZJRe6Sl50TPmOvvNwNHDbjHGOkttgz1xT5oqmRCeHRAOs7phPEIaxnlfJ2BQOiQauKTax2C/+fOkqYwe7o0Xf6sZpjinWZy25/HqbNsYx9RZM6BrGuu8nEmM5LBrYZv107PMeR4nXvrKn9DUcEg1wmN6XChaFlbjLIdEAZe0LFDbl3/4WXeew2sEx6xqzplxsW3JnkLBnSp7m8Nog3zDEDxDfxn2ehNV9DRYWnx+vnT2B08KBiCD0loipnFj1fJT7zBBRNtuUWzk1HFylby4lxok+5SYNgybhG6ffSj5wLLGSU8MBp/VSqQDu7SCN4/s9T1DJj7CTthUX6GLj3ZS+kSbmJYcBXROfsBJPaNy2RALfN5AYiWLFXdiCTxwTvn+D5KpP2JRfeq2mieRDB2uF2MMyfy6blAu85DAIuj4obTv5UPZDvnHsMyp03ksMC2qRODQ/QfwBq99Np5oekeTLadooOyWa8/1aHneSdfO8JMbzZGwmcvbB9vNQdQBxB5HgobAUApexqkd06BylL+MQH5xUfJHnx5MMW5G1lVzHruoBkoOlZS2UFpM6QP4Xq/TJ3rYokckLyitoPEu85JGCOldexC9cECcR7Ps3bMkbKm2muWEWp4YDSM8GiRYMwvRSkMx1aqM5pTYA+Y1ysVLDPnZz6BDQAexdMXcq/6wO2McTQYIFo4pwaBH9Kb0elehC7qAXp+QtesCwuzIMpEQcp/R3uSAT/rHT8QaKo5VBaDsEe4JiUZldHmE1oCsBQu9Fr0hEk7GMLW7aiIH0JkS/l/rLDfmHma46UIOgZNgFiBwpNAyUei/s3LBW1mCGRSYdn2OboqkWNtAqZjDt/4GVdWCFgXd4RIY3mYr+9iD46ZDksFbJuxlmeBSH6E5NDX8KmJ6haf8AtIzvSSEI0xgAAAAASUVORK5CYII=">
													<p>Physics<br>Lab</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMMSURBVEhLtVdbiE1RGD4uEbkm3uWaQvLgQQwJo73WmSPOhJJb4WHENGfvc47SVhLlVjx5ITVkJs5e64wGmVzyMEXixcMkeZMhuWREyfj+df5z7HNmM3Nmn/3V3957/ZfvX/9a6997x4aCFhVf5mh5xdbiLd3zcDRw25NjQLbHUfIZrv0lUcJlk2hga3mijBBiK9F9oLN+EptEAxDtMIRK/jCkWvY4ntjH6mhx0GuY4qj4Fjsv1iTbk6Mcz1qPWbeh3LfdB3Wj2SwaZG5ZU528SIHwVbHkJKm82MQm0QCE7/yEJVGyi02iAUieDyAtEP+2VXwem9UO6Q5rse1ZKzDj/YHEEOjOsXltQE3CVrIPs7qL8zwB1y9BxI4Wn5rbNo9jt3CgQOhQb0xgKmeHNQe7+PxA0oKg3LvZNRxSWu4sC6zlGVRgASXhHzfPSj7E7l7HruGAoK1lBFr0FsbFfSb8gAqczubFfHSxsWgq2ygx4xwGCNzlJ8ZaP6FxNJE6zH4rkREpdGchH41dLfo3Al03wYrEWnx282I86UCewPMjv54kreJLjHMYBB0fEG4nHe6PlOlo82l5yTiGhWmRWnxHid8jiWba1fSKNMr+2AgQrsU49euTqVxilhlnZDvrpyORdFqJDA9VBwRvoiBpz1qFQFeRxGOMteLorGaTMuAkLCc9KoA3mXiJ+0ZWVQ8QHkaAspJTaXHNGr2KT6RlQVIvDKES17DWK43zcGE+dSrPrZ8cJJjZV5C+ptK23Nw4g13DATO5EEjKArIelLfedd2R7FIbYFY3gghLgg8BNh0IbMB0e3IyP1UHlPBUICELVYRNS3C8hoXQoamIXmOj5R16wbB6aMjkNsxFo/jpJ/sr4hfKvIjsaGYg2ItEuoNt5SETsBrAqdHsVl8gk4wSuzJazgaZgv6bX18pSOooh6sO1CDIGWSXEehYsWGA1MbYxcGkssEMihYtZ2Y8a2lNJJeYxmH/D8ys6Z9neBiCjdo3pN8ebJ6nQQHCCJZm8G8zrM1xkN+rqeCngMMzYrE/ozww+9XhwlwAAAAASUVORK5CYII=">
													<p>Physics<br>Lab</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOJSURBVEhLrVdJaBRBFB33BRRURMQlHpJM1biAxounXCQm1Z1ExbjgTsAFQUEQN8RLUJF4EEGMKF5EIaCCSgJxCYgoSIjS3TOBRIiooF5UFI17fL/nO6merkl6Yh58Wqp+vVdV/9WfGOsPnp2Y7SpZ61ryCr6uZ4l3rhLfPSVeupZo9lR8S2tp6UhO/z8QkWvLNZ4l70PwD769A0QLLx08XFuU4SRJA3nOoM2llonpTJEfGmtiI3CV9RFPaAixmanyA2p20UwYLcgDTBUdMNBWE1k+gfK8YLrogEu7TGT5BJWozS4Zz5TRAOFOE1kolPiCWOdZifX4HvCUvIna/vw3nyyXC5kyGrDbQwEBLbCpu7jGpr4xUUdremOxYa4dr8TaE55KbCdzJZUs8Amjwq2eOwuO/q0LssgF/00reT4wrsSzpCUVvQTHFqWOLXc4Su72335lopBpowHXdj1AbsnbRNxWUjIqXAqR8jdkycfB8cz8c8QRp3LeNKbPDacivjiL4CE/MSdrnBy8Nl3r4HgoyBOWONlZXjiRZcxIm8VAEAzHq0mMjmxICiVfw5BVLBMG1QfX12NajFO+we63kahjiRWmnIGCjNh7NDac5YKAkQ6HFuCdk2NTtlhEOThBa3ZO1ID4JXoRvpgOMhQSWvRkOHcJXLsaG7jcsSw+B4sz/RwbbfDd7NdcpPR1OQM9gOWCaC8vnAoRT0s8i+/HpJWogdC+zHh67r3vYGv+JMcuFuZnGQxs/Bv9zrNcEE+tohm6OBF2VMUnoNb3dJJMKPmVbgSbeGWczwrwHWOpMOgZIOlaOlF00dtNPxEzWV+gjdpiL5rMUmzoqikHfHdYJjf8+sKRICoKEojTgZJogfxup7J4AXsm1AvAuYHpBwb9daIvxnXVppaLKRAxdzBcPxkJsV8fR7mamTIayFwBAriZxrtLC8ZiE/W4gR/6fCZPyU99/xafcxorF6j7BAgtuZOnfJAhIX4QJ3yC0/7SczNrlNzI6dFBDSRAYolGngoBJ1uZLQ7RUzydH6ieOhER088iT/t4tGrmONzEcYhkv2f/147T8gdO2a4TQqQHY+fw3QOxM7jmt/q8n6PEDerxTDE4gDzUy/sL5DcMyf80vLLEZJwKbdIslAnk0CvgZUMDXO0moxiFEh/g7Drq3Zw+tPAqxC4I3UL9HmAjTbjSevx0VqPNjuGUARCL/QVE5mxMN1/0sQAAAABJRU5ErkJggg==">
													<p>Theater</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOJSURBVEhLrVZJaBRBFB33BRRURERcDgqeBMWLp1wkhEzVxIgTDS5RAlERlYnTs0TCXIKKxIMIYkTxEpQEkqmehBHcAiIIHkRccjCCooJ6UVGMS9T4fudP0tXLpCfmwaN76v96v6rr/18TKoZkTqxImLI+ocTVhJJPEqb4YJjiJ56vMXY9bsq9mb6y6ez+fyAhIyu2Q/wOgv1F4OFiNJS4wVMnjnhOlCPgM68AvsTimrqql7JEaYh2Rqfh07UG2aEP61iqNGCXlz3EghM5wFLBgUn7PMVKoZKvWC44kBwDnmKlEEeUyYm5LBkMmPTcU8xBQ8lvhilrDRXemVQihfccxoYK9qSKrGfJYIBAkz2ARiVvQTxf+A3fFmvScGhKMiskjulUIiv2w1Z3rLdypWULisZs1XI0hT+jwQpBlLhk1bQpL+rj8pGRDVdSJRg5UQa/A1jAEar9lClXs2wwQLBbEzdFLwk3tDXMcB4FFtJvLUiJ+/bxMYoXeDanTbmE5f1hqMhGbbIS96jEsIDH2rhli+xA8FrXuIOUE3iePpyvmM9hvAGxnHOyk7SQTGd0ZtCEtKjkW2wswmHcoPPBKr/7TH6HhTVQ0LgKV3v6jEckYiaTmcrhdMB43DmB6pwyFom0gXywgD6nT2AqcYUqwgpmh5WpuG3szrg4NuFZA7Yns1WrsPuxfq5EG2UznTnYPzpehNQDOJyOdL5iMYI/LTji/TzO9rNhRqJ4N+wiOJqPeDanesML0jmx1qssXVTyB93zHE5HrCe8TAsOQSTIPIzd1kRGKQbxbMeu37htbkLnBIdyg8oADl3sODBSu1aJeIoVCJ8hHEFjXEU2Y8HXvHyw0Jscxh9wrKGMNHrCa+yTsbuz9q+i28RL/C1aZ+WMRy9ImnIXy4+PkX8nmkB9qnvLIgT362CDfJkktXH8V2PJYKDksgtQNtM4jmA2xFoR6JfdPkbxpfCO3X/1TSw/UPfRBeVBNlmghMRYGmf8AMF+O3wtohfsZvfgoAaiC4lONrkA+1ZncHzyM2wuDXSediESpmuRzRZiHdvmIMBJKj+7L35btx27lQ4IPNQE0dsR6AKO4SiS7Bz43m63qGSWejxLTAxIIlcvL0q0VKp/nj5xxDrKF3Kb9A7EJB+qAp42OcC1uMcr2AjFJ3z6Furd7D65QGM4hM/Yg2B3sbs81TG6URXa7Cx2GQeh0D/Jr8rVx3v3dQAAAABJRU5ErkJggg==">
													<p>Theater</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item two-word">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFMSURBVEhLYxgwcN1PnfeSt4YxTuyjpgFSd8ZFiR+rPIn4ipeWwX57exaGK94a1654a/7Hiz3Voy55aXhjlSMHe2lMA1qMRQINX/bWbKemxZe9NA4TbfFVL01zoIbd5GKgLx/BzSPFYnCCoABc9lJ3hJtHT4uv+GjZwM0btRgXHrWYHDBq8ajFWPGoxeSAAbOY7NppwOrjAWuBDBeLD6FZrPEFiGsve2tsRxanrsUav674aBShWAy0YD4oBZ73VpVGE0dJ1cCsIQc0IA0De2o5QZUQBmgWPLvso+57xUuzH00cbPEtDxV2UIMcyM9Hlkeo09gOarSf81ARBRuOD2AzAB2DLL7gqscNNPgqNnkM7KX5DVRgQK3ADoBB9BurZiQMtLgRFIzY5HBhoCMnQa3ADq54qxeDMjgevPGSt6oSqQXIJS/NPKgVWAADAwBsFNe0IR6QmAAAAABJRU5ErkJggg==">
													<p>Computer<br>Lab</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFKSURBVEhLYxgwULrBj7divbcxLly5yUcDpK58VSg/NnlSccl6L4P6/fYsDKUbfa+VbfT9jxev94kq2+DnjVWODFy6wWcaAzYJdAx0XDt1LfY9TLTFxRv8zMs2+uymAD+Cm0eKxeAEQQEApiVHuHn0tLh8k48N3LxRi3HhUYvJAaMWj1qMFY9aTA4YMIvJrp0GrD4esBbIsLAYiA+hWrzB9wuQri3b4LMdWZy6Fvv8AppfhGaxz3xQCizc7C2NLA6yGJw0oQCYNeSAYmnouHyjrxNUCWGAaoHPs/L1Pr7Adm8/qjjE4txtHuygBjkwa+Qjy8MxMKRAjfbKbR6iYMPxAawGoGGQxcU7XbmBwXQVmzwm9vkGKjCgVmAHwBT2G7tmFNwICkYs4rjxBp9JUCuwA6BviqEZHBfeWLHFW4nkAmSDTx7UCiyAgQEA6iQ9JCmCx0cAAAAASUVORK5CYII=">
													<p>Computer<br>Lab</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item two-word">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJYSURBVEhL7ZQ7aFNRGMevDxQfiAo6SNUlNudcjVILOjgUB+XmnNQsZhB0cBYUwaWi7WRpFyddRAUnoZODIIqggyioVJNzkkJFHRS0+ICCgw80/r+TLzf3mtv4wCLC/cEHN9/j/53vPOKlpKT8Mx4WehfXCmLrrb6++eyaXSaDzDKj5AmjxTurZd0qeZlDswM1tFqcDBtGrKr9Eqf9PTo1bBpiryo6t4JLYtzd27WoquT2Wl50s+vn2Lw4ZJV439ZIybfwnzJaTrf84jyXhVBDHMXLsE6LKxhkIYeTqWq5oSUair9Aw6OPd21eQjkVJQ83Y1jEN6OyO10xg6ZP4/VOY4DDydjd/ko3GSUrOWEL/kFb8hdw2DFW8uZhivGmqFHiCW0txUxx49pWs4gped0Vd2I8yKyy2t9WH/LmsisG+THp6agwfo9QjLYU3x+jMWdKXHDFf0pFi16I3G8T1uJLNZA9lIPGx6Mx/J6mI3QCv8uj4pblEDiDY/gaFf3BHtQ9bw7lm0K2H7nnYMO4bOudSBQS5M9ESAjFBzDl64RGbVbOZ3Nc2hls0RQux0V6t+wKsYHv41LcTmowk7ldwXm77VZin+33MywXp6bFJiTdw1RvYMfwZFbjFi9F0SgW9TlJPMmggWclJvF9FTd+DHYNi37mYkoa6A3ihazjtg1oO/E29yOx3GgmpqKiMxkafYLdpD+ciT3ZNSwXoxzkurCoIzQcadPu0pPjcAu6mW51buXyOZI/uCb0RBrnfAd2FhemSDvDZb+EyXfvQO0NDHiJXSkpKf8tnvcdZiXM+vwawPEAAAAASUVORK5CYII=">
													<p>Swimming<br>pool</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJTSURBVEhL7VQ7aBRRFB0/RPwgUYiF+GnUQrRQQQsLsVBW571ZBLcQtLAWE9bJzGwkOlWCNlbaiApWkoVk3myWSETQQhAUBLEQlCRFBBP8gGChBhPPfbk72beO6weDCHPgwHA/59y5b95YGTJk+GcIK2KZVxE7w3v7FnNofnF6KLfSU6Lbj+U7cMaLxS1OzQ/IEEbnaob19GKnwGV/D80MEyr5ulS1V3GLgWLf0aWucvaUBg5t4dDPEShxylPyfaMR1vvWV6IHhh+SmBLXuC0BGaLmVV2Nwoss4XQ6vEF7c60haYzlOJqL7vCB5VQD8/Ykr+S0p5z9upmBoUfq+5ldnE5Hse/gav1mKIbAc5icDMuFFk5rFMqFRah5UhPFUC9ptZQ7E+XX1+IGlRzWzc3QNZRr8wfs3WEYLuSQAYpD7JIpLC5QjlYKk09GTlNc181/ilJk78ImHjUKIzYVKGcH1eBozhp5fBN0hFrgd9ER5VsheBkr/mqIGhSPrRlrAdUHkZCov4pj6HWrhzdqkXqQID+mA0L4U52AwES6WQOj/HbubA5MOYnJbtC95VACXIutWNP9VIMfkLZC503rBo+VYrmJ5Uy4g/Y2vM1DGLzxK6LT7T+yBl/xCsQuYqgvaeKpxLUCX+Aoqugrw/w2OMq5Z9A7H1TEBrZlYJ1BLI+j8OmsmZj8TjiFMPkM0buzPxxnLasZ8Ptz65Dr0C8HbdouXTlOz4G+TJqOJgfHIPxRG+GKID6B4R7g+QoGzdNmuO2X0BnLvdC4A72bHMqQIcN/C8v6BpB+9BkRsASDAAAAAElFTkSuQmCC">
													<p>Swimming<br>pool</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALQSURBVEhL5VY9aBRBFF4VRAtRsVDEHxS5nVmNIoJW/kGK3M6dUUxEtBMUBSv/G7WwiL2oICJY5oIoksZCLSJWkZjZvWgECWoVxChiwB/M+b29N+fuXbJrNnca8IPHTr577/tm3s7Mxpo2eLHLXqqV2ERRbJEbC+3WrKHtK+cYjmJgt1jE6fWDr2QvomQCRnv8nDgR5jxXdHF6/QBhHTbxs/YB3xXnIpyS3ZxeP0BUa1fuo5Z6SjysGLvydsC58lTDjNHKHpgWEB+MMbg3zPWRsd/uzMYkbjBXwPhK0ZXbPCU78PsTX4lh33WWsGwyyBiR2Go/56yo4krIG41yzkGWTQYKJmWM1RbRjVfMP8LKf4K7h5q31BGWTQaKJ2fs2jtpTwS8Ky7g+fJ5PrOKctD2QZZNBgpSt9pT9o5qju4Flo4HklMba9W0ELkjYQ5t38/S8UByauPe5tXzcezuR3hXXGfpeCB5asbKPhnlxQBLxwPJUzKmS6aa1/l1i1l+YiBRw+gjduQQYuy3sfiBNr7G8wtywsafcGw+05iM6aPC3Hscs1uoHaVdz/ITA0W6P2s38fiOMcYkLhPnZe294CvGOp9ZX1SymcZkzHXdmGAnbrIteL7D31eJjwWSNEy+0qpJLGQ8hid2rPgeCLMx5WJl32hsjLHa00EtB373A/E4oJ39kSIcBxieDXO0c73WtcsjHAJndl6goZzNhuOJ3Q3E44CLvSUwosB3uK91wwJaHQTOVHgIlyxrhs7Jo4bTSh5iCYt+Q2eO4BVsfdq2bC7TtcCMulA88lcCx41ty+/VtKbh4YprbBu81wfjJjUkxHm2nQbApmnDrOifPYQ4znRqQONmRS/vrGG6Fti5x8rtCI5BB9OpgU3bY/TMpTQu/pkxWnPYJGJ8ienUwKZ9bPR0LiOYrgV9RXDdPcNqB2MT/xDle10MIzpLF62ZTP+XsKxfeUmP5g8JbsoAAAAASUVORK5CYII=">
													<p>Library</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAK5SURBVEhL5VY9iBNBFF4VRAtRsVAEBcHCRkEErfwDC3FnNoqXINoJioIgXnY3uUK3sDh7UUFEsEwOb2eXNBZ6hZYnoqh4gohaHeIPouAP3vm9yds4Se425k8P/OCRmW/fft++NzuzseYMPOWsLob2FoqCcjZny9kFwdjORQmnY3T/Ck7vHbxIjvuRnE7CVfYBX4lBk0POCKf3Dl4kHpkmfigOF5QomhxyKpzeO7BxjlrqKXHbML5BnB8Lt2/GnpJ3/UiUYfYuMQb3irkHZByUswvR8qtVTpTxkBfxTuwAN4yluQdu0q3sW8WyrcEVt2x1IRZrTU7zSn6pn9tHWLY12jcWT3wln/P4Dq79RPUK49fUEZZtjXaNsf124zdXHYtzMHyWj+Q6yoHxBMu2RrvGZhRCe1cjR+cCS6ejG+NixV6OdX5fxyvnEEuno6uKy9mlaG/cwF9h6XT0wDhvcpg/Zel0dGusD5kGfiiSK1l+dlSNxQf8vsQ2mUqMsXY/EC/AfTaNMf6I/E80JmP6qGhOybeo9jrv7RzLzw5tHGY26rESN2sVK3GBODcWB01jN5KbXOXsSYz1fbiOe0t55WyD+Rs8xCXiU6GNlfxKVZPYb2M5VX1jxXfTmHIx/1ZnrISnr3Fg/liLpwGVPTRvou2Apy6YHObxYJhZY3KaV84SrTFqb63xVISSoRZPA1q3l4y0Gb7Dp8PMMq7Or/EQtqateajkRMLB9ChLWPpaJI97ob39TGlgMbPNQNIItfGvBLYb2/K6Gi3rZ6BLl9mW1lXemimpT3GWbecAfGUPYA3GKfBkp5juGGjrtUSvGMn1TDcDZieTliB5mOmOgZcJf6G4xXwozYh/Z6zsY7XESJ5numPg4ccSvaFYbGC6GfQVwRt+HzdMpCb+IehcxxE7ibUuBUEwn+n/Epb1Cwxu3ejMsdh8AAAAAElFTkSuQmCC">
													<p>Library</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQ8SURBVEhLzZZbiBxVEIbHG17ijYgXMBqUZOec2VzURR8E3Zck7nT3ukGyISQPgoIo8UpE8iAKohj1SQkmLyoKiixKjG5EiG6CEgnZTTbb3TPGWwJRoqhrVh80iZf1q+6ame7p3plRX/LDYebUqaq/TlWdc7pw0mP/0kWXhOXi6tAxL4auHQ5cs5v/ewLHbAlcuyEoG+9Q79yzVP3/w3dNT+ia1yA4Hjr2W0inmwfExwhkMnDsr+g+P9G3cI6a/3uMeT3n4Gwzjk5A+Grolm4QeeCZZci+ShCPTNxSLH7RN+/MimeXo7uT8VvoFtdNP144NXLWKSqunY/DA+xgr9/ftUjFdXy6Ys7ZrI+S6k3ThcIpKq7Dd+xKsnCEwN+nRLNU3BoVx85lR99g+PpYT88ZKs4A4mGI1+s0g2Cg+wp0fMYuyZ6K8/HZrcXzqOWXkL7SLk3tiAXjA4svxF/IzofyMlMHhBtR2tdJd3ZCLKiWTRe6U2TxdhWlEXjd11PTv6QpVNQSnRIL2PVW9H8YW3L1BSpqQGrK4jQd+a6KZsT+/q6rpLNxuC0cLJ2r4lxIydjQT+KbprtfxTGqy81FEB+Lic3PrepLKVahR+rqZ/jzqmeu0+UMArd7cV3XsYGKY3BG19QWY2dmHKVHA6fbqorcXLMI6qWkXkOfoB3zUK2B4l0WbyQrz5LBr5O6+/rmXRw5FEQK0YI5gZMHxAlp/Diuuakyf4b1A0kHeUPOLWMzPjjD9ndkw/i4E/tNNZ1K2ZaVFmLHfoDBpO+ZXhVFCJ3SZb5n78ZAzmOGKG8IuVwgcjTVTQQ2cC88fxLIwyqKuu4TWdBpBtxkS/JImoekPLdzFez8TUbjJETEpFenGcgNJhnJI0sO6XI1yQXrW1PEGL1HCp7QaS4wermZqHn4rr1D1XOBzkhYNmt1GqXgMamNTnMh720zUXqYP+RYqnoG0unoTVG2m1TEa1I2SyWVO3p7T1dRBvLsUcNfsoTxICMfqmouKn32Wgku1XTRM8fFwcs0oKIMWLsZ58cheZsgh5ID2Qj23/v9Cy5V9QzQe0FqrNMGiOY52n2HTlMIl5Vm4/gwOk+qKIWhwcJpETnnNu8Vkl1if9R3jKuiBkKvdCXEfDmUVqioDiLdgtNdrUohnzvsapKzf5+K6qBEG7EfnfEqlrNMd/8oL9W4O/9yKQFG90i08oGgajOCAG+TG6vqmgWyS7EhGO52+XwqXaNqWUiaMN5GdKnGaXdMkoA4fuUSA9kjujwz5DGAfHvKsM0ZT0L6JGlLtp7SpfaQLxDt1lrER1rVtwbf6zLo/h3ZcAI62mkeKm5pkAC+U/Kn5QNAl1KQppkoFxei+068SzvR6o3uCFwc59Mcd+FwVJ0ehOAjAnmD+VvMd/I7xS8vj9kuz17LD7v/Aul0OYvUbT3EG+Jf86A8p+0+gU4SFAr/AC5Q5JxHir0VAAAAAElFTkSuQmCC">
													<p>Football</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQrSURBVEhLzZZbaBxlFMfXaqmX1oriBWyVPmgVvFXRB0H70pY0882mSjdIfRAUgmJrG3dndgPigijW+tRSenmootDSLiYzs5sERXtBKYhBxVhKxcuDioqaWn1oTbzE35k9u9nJzF5sX/qHw8d3vnP7zjnfJXXeIzv40DWuZ9Y5vtnhBGbYDcyHjm9/5Pq25/pmsxPYpnh4+cUqfu4oeNY9GH8TZ5OM37uBPR0j3/6TcYJg/iCAre5g1yJV//8ols2lGNmFsSmMvuEOWfcJP1c2q+B9NePYHHL89NINo13znLJZQxBH4J1GN1ssFueExjqFU7FuQvkERj7OBfYdyq6j/8DaS1gfw/HO1HTqAmXXAb+XDP1AKUaz76y8TNmtkR3uvpFov4P29u3um6vsGKTOed8UdBrDs17PYmTGoaOSPWUng5QtoHm+pFleb5emdo4FG72eK7B3jOyUkjJTB7vcjsFPOunOThwLCkOrb0b2FOl/TFlRFMrmXgT+kaZQVkt06ljAjgPq/XO+lFmorBlITaVLGcvKaopsYC/BmHT2SLGUma/sREjJCPJXsU0Jn1F2FYWhNVfpWZwmspOt6uv66Uc0deFxItAvOEZ363IM+Yp1Z00WH58ruwrHtx6tL1bpU5riOXeo+1YVScmxYJd7ZslViaCR7681kATuej33s7aFjXzdKDsw2nV1aFAgAtUFM0VnbxQjzN/Xmh9n/gprJ2rKzUjOLfK70JMzfEb6AP4T0M66XNmsVrdhfd+GOUHKlisrRG64+zqcPomB8bpiGxLnjL1yNNVMCHjrCf5vHOeUJam2P5AFncaQ89MraoZbEilP7FwFMvsjJ0EchzVqArnBUOIRSHAWpRFVSQQ7DiKOafMKjl/QaSIox2sJjiJEeh9X8UTg+BCOn9ap7Ng8L7XRaSJwbJKc1Qj9v+RYqngMep5POZ71gLLC3K+EJrgqL1JWDPLsUcPfG51FyLffU9FE5P30Mgku0nTyzME8mQ/sHmXFgOKDRDxJdgZJWWkW8SabnwYC+1oVj4FybkMu0OkMcPwq6Tys0wj6D6y6EqVvWX9RWRFkSpkLQ+ec26RXSHbJ+m/cepayZpAvmxtYPO361lpl1UEaPYwebVUK+e6Q8gk+DhuUVQcBb8f2WNOrGMX1OPlFXqr+inV99adhPyXRygdBxZoC2YfJ3JlsxbpNdik6crejP5Xzuu9SsQSQJpRHoEjjtDsmjWB34Ss3i1xdbg59DN5tVGx3xhshfdKoS1O9pEvtIT8QnNOt6phLv1V9axgom1so1b+qM8nYfqdJcIJ0BkM/Vg3ZL8sHQJci0GfwdjLjh8H65rNWb3RH4OK4HKd90pVq9BscHGTcR1BvQUfYHR8DXh4pkTx7rT52ZwPpdDmLctHjeHM4BvYmeU7bfYHOE6RS/wETsiXLkdn9dAAAAABJRU5ErkJggg==">
													<p>Football</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item two-word">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANzSURBVEhLtVbbi01RHN7ul9xCSomazDlrnWFGprwoIzFmr73HfVIUpXiRTEoU8eL2J1AomShhHoREKIwHh+Hsfc6MEfNAMm4zySWMGd9a53fO7MuaOXvG+Orr7LN+3+9b1/1b24iKtMWLXZHY4Qp+HmxyLdaG305XsHZHsBbH4g/xfMq1Ehszy9l0Shs40FkVOrgB4y7X4t1R6Aj+B4OpxyAWkE10uJWJyWp2GuP+EIM40VoxazTZ9o10NS/BUr7WGeUp+Heswjk8J0OxMJPJpUUTyV6PlFVcBOH7QGKYZmKJ1F+oMYZhWa9qNX4+aKmaPUp1EsSdiorhEDwKJIToWKyRUhQcm1XqdCEKtpdS/MDS7QyLeQN4Bkv/NdeGGd6iFIWUxcq9OXJg6oQL9tnXLvgXtyYxjtKyQMNICN/5hay++6AxVMYdK744326xT00r4uNVIoD/tZ6ce9JLttNZ+ZWLqbjN16ukHBwzvtYrUKR9zEHNJBcT/HLKjjHMdjUG3N6TE99AcgXkXM/HVB47TKEsssvpEYAZm82nsALabgc1QaZNbpJcAStQ541jO49SKAt0/MoryIpYLYUNnMgJaOsIaoKE8TFKMZLl5SPwv9WnsdkuChuGfMEh0FWmDrknqepYKZ6vBGJawudHyuJbMhabo1tF3/apOhwU/AfiVH/IHTwFxyop0wkHm+h4P3WZxTMzPlcnxFLdladU1lttvH+8H6rZT5eVTgsJBX/TsG7GGJLIE30xpIlIHNIn2lrdbRhD8KL/9okFO01hBXnPeuPRyc4m7fKxZBMGRP4ajRNJIQUYbPbFCxAD/4mcrZTeOyA65E9mbfLdpXC4AhWi933tC44ZWxhMlnujPncsfikYK0TpR9Z9Q+6z6khj0ivV9xbeTU0M7fvIujDSVqJGZ6KlYAd6bi62KVT5BH+pTKNAGmGkj30GejbLFaI0BbSFS6qdmEnhwpBXHWbzLWTiJQoLyfPAYTwZ1Mn7mMLRAJNtQRMv5UWQMVmM5EZmFZuCtrcBTVfjyrJJJIkOLPlur1GQiH8Ej8i9Rif+q0/G8YFPVv2Ha7LtWNbOoGkUooCsIZuBIS34Ipi80Jn3Rpzy45T+b1Afgpg9lu+5rqM85aEUbI/81qbUwQMq2TxZDuUlgpldw+9NsE4OrNmOTSVZARjGX4mm99x3b5LyAAAAAElFTkSuQmCC">
													<p>Art<br>Room</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAN4SURBVEhLtVdJaxRBGG33KG6oCF48CIoQNxS8CCoeQmJXJ0YdBAUFwVxCyDY9PS44F7efYEADwaAkmOmaGY2IooLbwSVHN9SDIsaoEXHBNb6q+Xrs6q5kOjE+eGS6vve92r6u6hhRYefMhfGMVWdn2BmbWw8SGdYL/gT7E9x6bHN2G79P2tzcsa+reh6ljRzorBzGF8HfiYw1EIUY3C/o3UTaXE020dHYUTZLzE5nPCxy1pK6uq6EbIcGEkrtjPUiZKKQfYHpaeju6uN/KTROZ2wG2euRPGcuwB6+0Rn46WSsDUIf64yNw/P5YDxIrN7Nuu7ySbKTILAk4zGTO7rEAHsoRSKeZWUaTYgOZ0lKUWHzyvpQArdu4W8b/n7ytV2mFImka64qxPLsyVe49V5tZx9TnbGplJYHGibilXitCFGZqVRqrIg7rrneF3uHQU6TiQCeG7wYOrsuvKi9FJ1992Iy7rJtMskDlmuLXyDo7aMHtGEmhXh6b5YtjnOzGub9hXaXbSe5BArwgi9HVPlhCuWBxjZFANpZtpLCEujgSlATYpZVkFwCbe3+OCr8KIXywEie+QXEBgobqMjpqMwPGo1Kzo5RilHTUjMBOc8D8SYKy2ouwX6GTibRkdgTnF7LkJALxnXEHn/F/u9uzplL8BxaRWX7xDkcFPwXcqvPKzwJJ2cu1wpHmXhrDlCXeSTcqqU6IUZ4TVQplrlFGx8OObsROrObu6rnhoXWy8aOrZNJguKzzoY0EYlaua8/qweMMSiKH6rYaqWohLhn/fGoxPKeSmXZFLIJA+9o8Ixuo5AEnncF4kMSs/yW4OYeSh8cmOEhNZn1ineXwuETqBj97+tQwLu6Jpgs9kZ+7nDWFYwVo/Aj6yIQ+4yOdCaDU35v9WljnO0n5+KwM5UxrYmGWIWD3s2Fi2InBqCcfCjWp9I0CoQRDO75DfRkD8UKUZoEZhg6Up0sm0/h4hBXHUb7OWiiEAcLyQvACpzQaEspHA2o8BqNSYHiIkimKxaR3EimN81GfbxSdFj6erdqJkmiAzOwFaMA0dFbaI6IvcZv9eoTcXzgk9XwgY+zWuwn/ltQTSNyM9mMDA6vXIvRP9EYD0ps1XFK/zeIO1TMHoaPdB15FEUJjSO+tSl19BB3N64QxyE6aEVH3diKS+i0XQysKcvmkKwIDOMPtJpepEfxf3sAAAAASUVORK5CYII=">
													<p>Art<br>Room</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="facility-col text-center">
											<div class="facility-item two-word">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAUhSURBVEhLxZZrbFRFFMfXF74fie9HNCLt3tkioPWD7yaKsnvvrfhqjDFYY0wUFGOMgoIIgUBpFcXEaBAVjalRQoVaqX4QK2IRsbHt3t3F4qMFrBK+6Ac1SKL19587LZU0dDW1nmQyM2fOOf/zmDn3Jg6kloqKw7srzjvKbYuijusmnBb5ZloUmKU533uL8QpjcRR612++9ZyjndjQlA1LvVxgmiLf+z0XePtQ7GB9szseknLpVCrnm3cY3yP/YjY090VBckoUJitzfmpmFHjrsLEj65sH++YnDnVq+ynyywxguxjV+dBci6EPspWlEwSOgXud2ACtrkochuxTyH2bC1J3tJWXH9EelJyd981Uop4eZbx7sqF3mZULU+cSUAPjve3pcSc4EzEpUoFqLSN4mpcD2crxp8uhwQptYfkxnDfDf0NpzAdmMvsNRLYdOyuVbsZem7HAdOf85F19icQhlGKJwLW2hlRTK5hJXaO1eEQ5iWi+g1+DcGvW9wLxlS4AGm20VakxFsj3coBsxfBcOYVeC/taC5Yuu0DnnK2Iwb216D4gWwldJAHj9ftWKCibKH7hRu9kDMyG35MPUlXiOa8bYmdVPxMp6rbJY09E93M5K1DJWucCs0blQHYj5zM6KkvPZ95BBo+UDBHaWk6K02a6BWr5RKV9NigZm0+bi1h3uaielQOMT+EtsLzAfATAj+znSBendMv/xPYL2D6DeaecBLhRF1AyiWzg3YRiVgII1zBmqdbwSKV5zRoiI4q8kPYuxchuRanax+BejyLtjxz9ekWqC6poib6O/bYok7wlF3oPY3OhBRZlA3O3hK0h0oFyN2OVvCwE3nilVXXivAn+DxibNxCpb3oBni878KvZ/8FYpv2X6XGncvYrOl3Mjwmcs5d0NkDbbkger9scheY2pdexFe1DKC1unzrxJOafXGY+k3OKpj9y1m/L+ULoXYzOFs4XMG+QDOvp6C7nqYWs653pgxPK63TreadXk40P/1ZT3zwhGT0bDKqmy7UvTPHOxInfkP9Ee85mIftoLuPdz7pGvGEJY1s7M8kL9awEGA+vTjXF+GYMvalI7QXk6ShzLtLnXM3noNPk9Feq6TjTByeMbMxmkpfoqaHYhyO7Mfq4zpirFSnjGe2VjRjUtNq9LhxpR2cnPf1YHOvtfzXDEl430vqutA2E9Kqvu0jqAf6mv6asF1nQ+LnZpyZ9+C8DOJcxDX6DNVoMCaC/eylSpVM1tdHTKMQfVNNN2rsL1wrvXWQKX4Wlp+BUj16IzosiFJojP3m51rZVxi2yN47U1OxPLzXltjPPs3q+eYT1LhpTictOnfhFE0pd9oPBzQb0SX2JiKQTw8vip2VBbeSupu1E+wXzFslaOS6XvlbWYDHUOSWZRDHS2j4j33ysiOzN9c3TrH/B6M+2rjwl1mpAXzNmuHQ3sF5Lpo6zBosljNFrvdlua8FJ3VVua5uOmgKRz1T3U/r1EUHndmUKxxYNfAqLJd1kKR/4K6S0R5nSK/SnoU4nsHylKQM8DWAtYAWlVr3aqRRHSgvpWQ/oXtK5RDz1bEUOn++rTeV60vs6AGviGtuPxWp1Jj03a+ifkAPdpBSRxrPkvcAVOeP5f2V0OBoM6liqocD3KbWONbI0FKiIaBeSwma3HVnqBxWIY1myoHKGc8caOfpfQEVcmFWMpW5r6T8HFfEM9gAwxm1HB1TEW2zh8tzp3mntqICK9G9F1Pqr2APoq6MCmkgk/gKCCEjc2njhugAAAABJRU5ErkJggg==">
													<p>Tennis<br>Court</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAUdSURBVEhLxZZpbFRVFMfHDXFBTdwxMVFj3HGJH9xNxKXpu29K1cYYojXGoKCo0FloEYdAoNCKYGIwdUNjaqSxfe/N1KqJUBVxwQ+iKKYiyiJK/KIf1CiJ4u9/5k5B09DR1HqSm3fPueee/zn/u73U36XQf/WBtLFerUqauuuPyxbdbbnYLcol4Uu5xD1Df0Gm6K6fsfLmQ7zb0NJcdGfiXMom7jcm7srG4XqC3OiHh5SmOH02Pj25OPyG7xPZ2N2Ti4Ib8pELM0k4HT0mzlbi3l8oFPb30/ZIrqf2rGwSbmdyI5lPpP8aEycYeOTu9m6D0tDVcABj7bTN2TiYPKVjykEzSsFJ+SSsI8bUbOTuotpL5ZcvupNJoJuCeqf31RzhQ5RFlQpUfQWh4s+UQHMSHq+E9p5QKLpDAewj2AuiMROnr6W/iqq/IMZTRncc/qqkAfuaAu5I7U7th89CgatfDsSaypFsr1FftkxUewEBvgK0Fee1uTgdmC90kVSiagtdDWMERMBP0dfhP9uSSsJ+bIsFkOmZdJrGGeuQDk7EnPsUS8BjBczgq3LKl4LzZZ/VM+loguQZ25JN0g2yWdbQpgT5xoxtUNX5roYj8f3AkhWo+YbtjL/MdzPJvwWD05qS8BT0rTB4sHzktF5VGm3QI1DZVZXpvcGp+Th9IcEHylS7pUoAoHewzZUNJlYD9B16i8W0XR7+gd/yTG/tCYxvU5JiTBtQPqlMHNQD8IkcmNgKHbnyWhuVz8nHGKFybJdg26kqtfYCN1aotFI5rVOV2galWua0oX/OhrsJ/5n4zjNgSTZO3ylnqwI6VCn9FcqyqRScK1rL62RH7luCzRmsNHE7sBcUB3sj478DvkR6c1/NscT7GX0gH7tZAqf/pMYGBfBxdpwid4vo9WYFe5DACx6I6o4C5AdjJnbvWXJUU6kc20olT4yL8HsfgLnYVsmHNhXbMmyO1ulD71uYHGvXs85XUfkbf1nT2D0kHx0bramCS2/prj+R/i8Avi2dbw7fLFXfC3CrbMMKVazLRXXn6VgZoLWwTWsK2LtU+6Iq1Qak32HMUSkAj9G05i3YS+X52jfBZB9636INQrCLddSYuJugO/k2a4xvY7nS8FHpftcD6tZKt+Sgnbat6fXrDuO7o3JqhhWcE66+K+wCgV7d676STsa+rKwp4PMNlONma84aaz760+izdcTod1vQasQA/O2lSkWnralVH7bLXllT9DXSteFUNXOLtI0zi+4Ykt6iE6LxqoRgfazxZerbpaI1hzJVStDWPfSypux2Epoj31zRZbBtz5aC0/nCTtgme9XCpAE9GNrZBH5YLxFVf4x9iT9a0FuuvLym4Uck9qHol6/8tLn0WlnAaoRNdQYUbVDfjlEcvqmKtHMJ9gj6T1D6I+BLAVqGTed5E2xMM7rtag0jmDrcAlYrTFxOxnmvlndtFFzpVSU2jnHHmvPwc/tBvz0iSXgrbYAk5w8+hdWKdrIm6wXzJhPRDtDl+tMAaKLAADgHWw2JLmbORlGLPsFPqU5EC4FegSIedLdQNt3ZBMyj8/66TTaehM/jw9OnHwEei8R16WbScbNA/0QEqiMhiqBuvLIXuCqnPf6vgg4ne4N6k9ZwPJXsErXeNLIyFKiEaudh7/PqyEoFVCDeZOJB12jcm0ZO/hdQCbtxBW2RV03+c1AJAN8DMMarowMq4Yj087N3u51THf7RAJXo34rjslqVk8SzowKaSqX+BIlNm6dK4j7lAAAAAElFTkSuQmCC">
													<p>Tennis<br>Court</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item two-word">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAL5SURBVEhLtVZdiExRHB+Rr3yVQtpstM0957IkQlGTLM29d2atmBf7Jq08iCc2DyRbS948IHnCA/KxyosQURJTdubeO1vKZ1E+a6Pkc/3+d/677sycuTsfd37165577v/7/O85J1IrHm5pmuRY4pxtyUHHkk8yhtbKnxoLxxQH4Dhnm9paPM84pszwp8YCWV5Gtr35sb7CNuWfS6nIWO9jWMjEW5uQVZeftiX6kPUX8CD4GEG8y1py28tY80RWqx8wvA8ZDlVC24iuZrX6AcfdKidKJvQ1rFY/nLiuo5RHRiOW4PCzeMs0VgsH1L22KR7wawEG2rW56OrneE7lqfCQNYUFx69p7MblUjTXKSzB0Wxy0WyUdx6VOd22YLonHCaGHecMEUVZv2N8HlneAwecpN7ScMfIdA+e92kO6zkB4x9ZS2xqmGPbEAly7CZkBzaLj64pVzqGttVzbGjLG+YY63kBxm8MRSJjMD6BDv6Fkg8ObxoUDILbzuLhAFmuo8z8BwGV2b9FOqa+g5z3r188i6fqg5PSp6CBXiC7QzylBFUCwd1GVa7wVH3wfhtLZhHAeJ4qi/5kdD6cf6W156na4FqyDZn+xXr2uJaeqoSozlUE+xmln8NmqgPtQtTF1K21ELrX2FR1QKOcVhmsjnonm6sMdLTlS/zfCL1z86T988EU759uXDKDzQbjbiw2DuuUKTYCx7tZBDcOcbb4e1ma4iSrBQNNsUtpAEcji9BVp1MpoyBdiehQYVU18nuvfKsygCyP0b9KuxQqcnNk3hRv7ITYkOsQM21D2+x1dIGex+B/G+XcqVAaIYy+wvND4bzezuoeECDuZP7v+f5wk3Ihi5QChh8VK41GHBbNrO4hFxerVHJ0drNIKRDtT6VSIEUXq3uAA9y3S+WQ1B0WKQXW95NKKZjiG5x100GCcU9A8OXXGVEdVyiEQjrH2U0p0ollk+G8T6VYM035G821n10EI3+Zk73Yqa6Dt2ohSn4RNvbSDZTN+hCJ/ANWp1j16W8NkgAAAABJRU5ErkJggg==">
													<p>Chemistry<br>Lab</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALtSURBVEhLtVZLaBNRFI0o/vAHQpUiiiAuFBeCqKAgokht3pu26GzsTqTiolRJZhJdNIiFKu5cqIgrdWGDSd4LQRAVRTeibupCV4oKCn4qiIJYrfHcyQ3N53Xymxw4zMx9977z7n2/CTWLE2MHFzhKXHeV/O5q8czN9GzipvYCosOOli8dZe3G+1VXiXFuai+Q6S0Ij3rv6fBWR4spO2nP9hqDgpvqWgWRgTIqoRwlvyHTBJ5PIfwR2R9OPNg1n8NaB4Rirpb5ehjVcgeHtY6YEnGTiImxrNjJYa0joqwNKOnZmtTyzODtriUcFgwKq1c+5s8yoK0Tba/xXMym4OAqK4zO39F7TFmbMe+XscDOndRyBcq72itz0l7qOQeJonA8vX89nr8gdANb6iHeX8W1XNd2YQgcBx+RDfM5D9vod1SF+9omjNIKEnayoheZfsGC2+ZmxCESxtxuaV/GWt6ESC6UD83C3F7EIP7QOV08NGgwTkYcYfdggCz3UGalFwGVufSIRPZHvUqk+jrY1BoSSXsR9ugbZHyaTWagEhC+h2qk2NIavG2jxQsMYC6bZkREy7Xw/UFzz6bmEFXWXmTxD+IjjrbseojKpMGJaK57JXfTGOgU4u1jPJNrUskMd9UYkOUVY4cN0FHhfu6uPtDVRiUu64i+afFo+bzM7kvxaSjTs4y79Qf25Bys4vHKTlD6IXahv49rle0+vMRh/kC2g4bgPF2N7IL5D/ebfEzEKp+iS4VDzaBDAeX5YOxAyfO0V/mUujPdJt5Hs2JfPN27HM8DsE1MtxVja+xtOB2rDCqjkm8xgM+lNkyBxeEesAYGSts9FtbLRnapBkb/pCqoBiO57jUc7gG27ZU+RLq72aUaEJ40BfmRMuRwDxAYNvopcZ9dqoGF8NUU5Eslf9LPYOEikSMzDd53nrGNLpiCgiDd4yxTjURWLMTIlCmweYq/qMQplvAH/8yNIkiDd5shEhiDsItV38ndliAU+g+bIqIDDyucDgAAAABJRU5ErkJggg==">
													<p>Chemistry<br>Lab</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGXSURBVEhL7VYxSwMxGI1uTi6CiE6K9cu1uDiJgg6CNbmCgqN/QhE6iaOzIIiDiL9AB8EfIDiJwuVaC6LoLg66iIPnl685mjuaUqR1sPfgwZH3vu/lQpI7lqE3ETHWFwi+EQooa1Z8vmqklghKhWH0b+oaJfi2EnlupPag5NRiKHmUYNHzjOxEKPipXaMk3BrJjWiX9Qel3PSdnBwNBEi7AdH35o3VCfRd2DVKwIseDyTMVJdhhExphBL2ySz5XqeD6VnyT1XMT5DRRlzUrWBN3ZeMNlDIghuhmp0OpqND55Xfk9kVLOCw7mvFeo+Y6WDsfRL6sHWzND7IUPxImF3Bv2A6uEHYwTfm3/bgXwTrDLxt4Bivt1ecxVc82CwYPe/ofWtJ06NRk1pqXF28zZ7VSm5OjxNQ6JFdHQOFHgtG0xmZuxnswwIZbVQlFDD0AD9ha50OxhNxhLu+rD+9ZHShWTDOdtbITuBROU/UCf5kpPZQ83NDONsrLHzUxIaX1+tjA0Z2Qv8iYWCNagQ86N8fI2XI8O/B2A+uEepF1S4zBwAAAABJRU5ErkJggg==">
													<p>GYM</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGRSURBVEhL7ZY/SwNBEMVPOysbQcTSShEbK1HQ2psNCWjnl0hyd6uCpLQWBLEQsVQwt3sR/AD2thFE0V4stBEL4+y4Gzcme0RIUuj94BEy83be5XJ/1sv4pzS8IS7ZRigZJyWQ151UtiQbDwUU1ZoogSCqrk7rVnfw2F+JJGvYKovcjG47Qd+JvSaUcK1bbiqVynAg2Vyx5k9GIufbA5R4Akva6gSDLuw1oWCPqr4Z+/Pb54UJMv0ET88emSXb7XUwfRfsLajmp8hoYxb1LVgJ55LRJgtumrV6HqxuHQzjaKqT2RGMOiBfmvQMo/ZgOEaV+Nn6qDrK1xazO/jXagv+1o6Hl/mHXRxEsMrAIhzhr37Cz3dT7BwMLzjoOU1mhhHWWoLp7Ar2gA+qRVUnBn5xGbLgplmrb8H4p8dk7mMwvteXyWhTrvmzGLofCL/Q82ABhzibq1cvGV10Cg4SWNBtJ7j7EC3rBNzrVneUEhjDo71C3SnhgMvi6dqIbjtRWyS8l2++1sGt2v7oVkbGn8fzPgGkPyh4LoXETAAAAABJRU5ErkJggg==">
													<p>GYM</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIQSURBVEhL7Za/SxxBFMcn0SpVbFMG5GZOxICgEALX2NzbwzTRdDbKdaL/gTZCyqRJk8rWA4sEFGIRREiaA3Vnl6CiTVKKchxBNMHLd+Zmw+7scD+yV1xxDz4s+/a9+b75sTPDBtY3FlD+mfT4TkD8OvBEwwnxXwGJbd8bfWrSVN6yJH4bj5OeqIE3DcYemDC3hSSmdaOx5JYQv8KzqoDATeJbAl42EmlrrLGH6GnoTswG2t01MmkLvPyrRAKJTTVMNujlWzxb9M4BiY9GhrFqafKRpNzz0BMzClS1HwVirs4ivwtJQsZi62APxdQin40siddaFCILLRdPd/iqTZ/EPHr2U8+7AQWdoqAVLRoWRREv944G/hct3NZQyZEjOQsp4e+zuSfwf0AHTzAK51jV77CI+J2VmAn1J/je+IjiS6Ew7BP39FDHY4gfQDiZiEJ+oLLU6kVwJR3bhlL+BUTf236nsHY6TFduxbZlIGxwCmOOf+vFYIHgejq2Dd0J95CBsMEI93YDwc50ER0ehy8nHuMAWYTvTzymKUziOO7sAaktE0fsFDahb0CfCRCuMFnkS1ZiVjo7JNT9B/OwYQ9HBjoTjkydIJiPS7uh5vWHlyOa78kYi+6ElWHsE7dCBYRWzWdtHexgn01o56Z7ReIrktUtUS2G9a05NmQ+/zN1H0OReyrO4pOkMWHCBtYPxthfv/UE4gS+dhwAAAAASUVORK5CYII=">
													<p>Cinema</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIISURBVEhL7ZY9LARBFMfXR6WiVep0KhKRaDTs29P46DREJyRuh+40EiWNRqUluZs9QkIhIqFR+MgVCA2lEBERH8F/5mbP3uyw96FQ3Et+2ds3781/Zt7ezFgV+zcWT/W0uNzZYB7dM8/5NIH2JzyT0+t2k0qz4p4z5nr0khfLnQfGac76tKpUmNkmeaxNdZon9BOIvXM951DCnWdTjADto0oibIlEohqzzJgSy4bTppIJG+N2n5awLJYphEfzv83OBGacVjKYYZrqWKq3Pc5jXQLUZzcXyOnC95tA7U6/O6VHDGZb1lP5dNwUDUrROLeHfvt4igHCJ6JP/B6A+I2suwLv5y6PjUtRlqZuOD70DkrFF440jOTI1EGpmIQxy0a0LaG2Z9C7xHMBS0KvenJ5UAb/5wZBYqezlvGYLZc5EIP3PVGLQJIYsXNt+nrhX9Vjo5hKUwc+zEXdbxYWToOJkeuxUVSEfX4SfgO5/14OuTHkx0ZRlPBfUhH2UcJ/vIFwuvIPj/FUbz18w9B4D8ZkhTkdB53lYtoyWdJuxcwP/DNBbEYWjqgRPbkcCj4kxP0Hs57Vl6NUChdWJk4QJN2GO6MMlmbUR7yHY74pWlgYkvJvhVkmVLO0qB0MtdxSoYWbnBF39vHELZEO8JzpX+mvUc05y97HaFvGBUDJ1liyp1mFVew/mGV9AYZIamuWcCjXAAAAAElFTkSuQmCC">
													<p>Cinema</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item two-word">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOZSURBVEhLzVZJaBRBFG3cFRdcUYkGJGaqJiQqoyCiRiHLTHXH5JAoiBg8adwQXBA8SBBRVAQ9qOTmKSgEBT0oijkI0UAisbsnEQ8GRA9KUEHcEjW+311jaio1M4le8uFB9+9f79Xy/++yxrx1lC2b5dus3rPZNV/we74TXe/ZvMG3+R34z3tOpKojFpsow//f3ERkNYSaga8QGUzBFcyG8BnVhwm8g+9idyVbJIeP3l7GC2aC6BIEf6aThzALSwj20U+wfYMnrXGSbmT2PF6cB8EeI6lEVmEJT7BbWMBkSZvdvOqiJSDsNRGpGIkwAeIPcp59b2n+lNbS0gnY4v0g/WYiSmFEwoK99hxWQbxSwmye4E0ge+I6hcy1WQzvfUZCIJcwxnY+ixfMp2zH81tX8B1SJt08p2gNiH6Hg9jnpOAbu+NsLZ5/6KSE7MnFX3XXsLkQPJLiBN77ddHpUm7IsL030gbb/FPS5suxXcc1f4BMwiTkicg6347WKqIhRPSAlAutq7xkAYQH0oJCPKKspLPSv2VeMRZQEZ1jOib4PCkZmp+IbNeDUghmL9hJ3Z9J2HVYKQRO6P4UqFSlLIQFu2IKIqBFXg66l+Y3CqNx3KyzxuPZTfMrQJJtlbJ0vvyuHpACkqud6lDvYCZhxD5uq82bOuxsFeDbMSkb9mMkUpkJ9DOgGM+ObFL9L5zCeX5VtED1IXlWUs2qPh00JhAlwywagLNGCH5UxjSqfqp1CMVVHxKrnnq86huOSGUgSoYtaNG35C8Eb6X60/3mreadsvP1q34VOOODUjao4XOmIALIG4Mt0vxGYZt/73Bi04LJKn4V4BJS1rKSCZ4wBWEFv+hMkK1X9W+Zyslz+DZUwk7dH4IN0IVCylpWkIlok3oghJuouZi+ZRS22VOqAoz1hn0T7KGUHDKq17QgmyWDy4Dg11V/CpmEAzjRXW5VYQl26ovqR/+vlnJDhuClysrcni2Rxa7D96gDVWQVhmAyzlfhPDfg+YP0dWW8kVDGYYsuBAmCq4veNFRkFQbA00c9gBaE9xb600kZs6E2FwaN3kCmIpdwCCordgrlOEnSZzZZDvfNREMYmTAg2GlJndtohhBvNhJJ5Bam32zksKQcndHPHBN4YyLOJowkbffsohWS5t8M2T0DRHsxgTaVfLgw60cJ3k46vGbU9+lchjrMpy4HgUPBhTDBypGMu3FZ2OzaxbNl2Fg2y/oDBFoFFkn8lkMAAAAASUVORK5CYII=">
													<p>Basketball<br>Court</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOUSURBVEhLzVZJaBRBFB3cFRdcUXG5KHhyQYUgahQ0jtO/JwlkFEQMXuIaMcnM9EQPQxBRVARzcLt5kgTGru4MQVHMQXA5CBIRbwqiByUYIbjF9f2empnu6ZolesmHx/T8+vVf/ar/f1Vg1IvRHZkRt/TGmKVfBW4bNm3E/0NxQT0xoZ83TNKbrjWNl+b/LzERXhez6Gbcoi8g+pODCGtYwBmPzqL3+L14IlW/QE4fuTT3BqfD8SU4++l1LqEkzoIGDUFHksnkGOmuMomngouwfS/VTiVKEksI3UQAE6Xb0tJq1i7G1r5WOnKjEmIHdLfs2Sf7qicB4zDhKCL+6nfiQkXE9CZqUw37lRRqgaPrMUGP2m1akTC1tYh8QO0QKEcs9KftvcG5nO1YwDvD0vdKGq8kbFoP4988CYRDhghvxncVvr97HGZRiljQq8Stutlxm6I5n0L/kOyOTJV0eUGkXe7JIPwU69GWIzsTbn0OxYiZyKzdEBdaQ5Y0i6ilN0u6jLSl6udhRT/cRhnQfc5KPivfWBFiDqClq2aW8piE/lxSZiRu0h6fURbO6inp0xcjtqka9icL9TmgVCWts82XlUYMQZ3cvfx6FTENRrojYxFtv1fvwS5Jy9lMaYWBAzh/wnUIp94OpiDGcT1o6WqYXHi2BYhL2kw/jorwNhX4MmAbw9S2uPWtNs1JWPoyty5qhlZzzXp0BeA5DikLVsG3zFkVcAwxadPh1nOtI0uDbh1sGrnHe3SFMLUdDikLnKfkNviA7ezj+vONqc4YTSPT+WjYo3dD0DFJ60RzzmeQRwdvkU+vJv6WtGkKL9ajdyFmaiFJC2KbdiqNLPrFZ4LvK4VjRcvJpN1Roe0r1Dtj6BX8oJC0gQBnIkiGfIbo3U5zUYwVI8Y2P3aqAM3CNyb0e5IyL9j7Tq8hvXASxdJvePUSRYl5jPYj8VYiws9uPS6KWkmXF5TNkmxk+O1HiS1E0h10T/SgBDET4pJZg/PchO+PUves6IuEMw64wAnCTxdf03CjVMQAFj/APcAJKFM1VZJGLdF0aD4MPTeVEmWIM3DK6hTKcYJ0X1w4WiTBHb+TAlREDAg6LV2XF14htgpPWoWjLMptNUoH423S5chEXuZvVY5LJhcuFqNHWyXd/Jsgu6fhjj2MBTz0EPiIaRi5IWBbN+L3dDlpS4eWyi53nC8J/G7HI+IAFrc1kdZmSrPRLIHAX2pGcpuTRxUvAAAAAElFTkSuQmCC">
													<p>Basketball<br>Court</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item two-word">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALqSURBVEhLzVZLa1QxFL4+NooiouKmoGjpTe5YfCuCWFChM7m3ImgRQcGF9QfoyoWouBEXCi6kMiu1m7oQRLooCMUHojgqzs1MFQUtKIqvgqU+8FG/kx5l2mbuTIYR+sEhc0+S78s5OcnEm/S43O5NKyi5XofiSKxEl1ayF+3NOJ1aykPqi76Wlula+fviULzUoRyZYEq+gp3RoX8ojlJrR456U3lq7ciHzXMR1XWrYBmLQ/k0zvg7mMIduWj1TET5yEZejWEBJ5nKDZicHU/manFG7Ge66qDTQRAr+ctG5mLg+KDbg1lMWxlIcaeNqDYTB5i2MlBQA3aSiYa9/GYq29JnTMkrTJuMfNuyhVYCiyGVD/IZf83jdHMDVbN9jHjG1Mmgs2gj+GsQ+4woLsSh3zrieVN4mte/zZ+tlTiH1P4YMx4Z4SHJ0FGwsWTSV7S3QXZJR+Igbq5Nd3Y2zOChVtBNhnmnDYcSw7BP3JWMMcJK3GK3M+g2o1uPPyujXsK5rUvmgCNLEeOU3C20yRR32VGI5JZ6CBNofgnXVXbbYfYzlHnzp1DtUSiDccLJQWDQfadDnwBHYXERA685FUYZlAoje73stoOOAwbhP1a8zUdiA7trAgXAwu/A1cLu8qCLHavtQvTd7HICnXV6PBQjsQpn+nfpRVMRui1ohPj3/lZ/MbuqBhbcgYwN4pbbS9ljd/WgVKG6z/JnVaDoMKcA8VNob7jON6AzjaiHHqYbF7DLIK9EiGhe0/6hf0Bngs3chT65B1H+hL8Hom+K28U87nIDVSMEsvxpAFLNRcMVKwbR5oyN/qYF3cPdvoinuKOYEU0gG6Yo2UXCPf9EjbDso7OPQnoxmuZgnVNBlQMVCwg/xmFqOX0/iZrmQ+Q40n0e7bHRe9m8t4e0ClaYSfUCiE8Y8UjuKo2GROHvRNRfSve6rjAPeyXfYxHPYd2mgBAlTBfSciUP+z+g9zb2fDelGuKHx79EJjk87w/9xZde+AR8qwAAAABJRU5ErkJggg==">
													<p>Language<br>Lab</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALlSURBVEhLzVZLaBRBEB0/F0URUfEiKCge9OAHPwhiQA/GTPca0EUEBQ/q3ezOzO4hjOJFPCh4EGVPai5ZcLdnkhUEIfg5KCqC6EEUNKAo/gJK/BBjfDVbIZtN7+70skIeFDNT3fVqqrqqu61pj2Q+OSulElvdQHZDelwlb+J5J13oXMlTWgt/oG12OpBH4OgNHI1NESXfOkqcdwKZyoRis+/7M9m0eWT67YUgvqV1WEPwAy/SodjHFObwQzEXRE+qiWOLEmeYygwwzk0hMxSnKI4yXTygiNY4gRjVkZkIOD77+eQ8pm0MrNMlHVEzAq7jTNsYjpKDOhKtKPmLKls7VpYC09ZHNpBLNcZ6UfKxoxKb3Ovty6iadXPQai+Zuj6oF3UEEyK+4XnFLdq7rTFrBpshS4n5cHIR2RqZNB8Z4Sn14YVi+7gRSH6iLe6B8BqeXZ5K7DjRu38OT9WCdjLYnmP7YchXHqqPKsd3WW0M2s1o1+PPxmiVYy+fXACOHEWM5bmP97U8pIcTil2tcEwg+3EuOA9YrQetJxr/KYqCDoV4rVADlY4bBoE/e2jU9HVg5ljJq6jgPqPCqIFJqcb5zWo9onYon7EfcLxtY3VToAA42o+onTZW1wZt7DDogfNeVhmBep0uD3C2EUH8rdxoGiITyFUost9ece8KVsWGq+xjqJUhOD5M2WN1fESpUuICf8YDooPT58jYWfz4bWN7AvU0jL9nb7QvYVUEVyVskL/j9Rv0ArmThyy8H8LYH4yVEO37TKFzEQ+ZgaoRJDn+jIC1f0ZOJwRpDeQjEnonHd4fpPo7lrOJOTKFPasR1TBFySq6FpUqHcPJAPU+svM6SnPB3mJUULVQLhb5xeuz19F3VygW4/sU1u8yHJ7kfbmbliVd7FgfGbUKID5NznGBO1AZDTmFc1yVxI/KtW4p+GL/CU5eUY/jR0oUJa05zuoNPO3/gO7biPBglOpAZqtvItMclvUPvSTPxVK71VMAAAAASUVORK5CYII=">
													<p>Language<br>Lab</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIgSURBVEhL7Va/SxxBFF4RRAXBIgTRgILxdnZNzoCKjWKRSLyZ9QfES5HGKqksFBtttBEULLTyR6WQ7po0+QdsbBLU7O6phWAjSREIOQSVhHj5Zu+J5+4cyLEriPfBV+x8771v9u3wZrV7hW8J/bkjWMrlxtJeX/wxLUcHp7+12RXso8ONf64wspIOZ6dYm9sdaqulsPCwK1oa8IZrMPhzZRggZ7/Aqa9WezWlFY9DK/YIZoto6ZnSTEFHGN+RM+YmzQoqc3scDOo12P0simRUxW9D5B5jA6OppFZOZQtje+RJlSv0SXzDn6pixZHtOwn9TVbTysjmGnIRAR/Q0hN1cij8kraMl2SZQ5obXYrA0In2X5BlDgev9SYsLtwFyfIm0sJ4VYjHvY2VLjdfqDRJuXnodSpN0k7oHWQTRP5g8BMnvR7D4pNK88jZhM2Nt0oNxBzYIpsg0IoNVRL4WR5AHI5hxFz4dRT9IaeaHJ84pEd+HWt/wfdkowbe2slPglGGJA8oMJ2vS6KVPSRr9kAs7tfRjVWSCwOBti/xN0ke5Fj06VnXMrtJ9i6QgM7ZCsmFgcCSccm4ZBySMWczGCLrV8TzMkkeMI/783UvZsB8SnLuN8mvJ/R3JN+EHIf7gj2zBWuPkrh+G8kyB+xqM9CeCIjxe+kKc5Bsld81MsJ8nmzlrcR2VEHRkM2RrWc8jp2cqwPDo3d9Wq2dZPugoGn/AWQIYjEkzNfLAAAAAElFTkSuQmCC">
													<p>Museum</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIjSURBVEhL7VY9aBRBGN0QEA0IFiJBiwhaqggxpIlYxEJuZ+4ieilsrJJKSC77c5cm1wQiWGiVaKVg5YHu7OZ6sQ6kiGAlpAlJEQhKIAkJyeXN3ndyOzcLx7EbkNyDx9zNm+97Oz/7zRr/FVwvd9f1WcUR7K319ek16k4P9rexWzD77Pjs2PV5TRK/dx2fz095uSs0LDkUls0bSP4eszxsGKp0BN8pClYqB6yPwjrHTMCuIuEbGO7pzHTECmyifVWu5C9QmvbhiOxlV7CyK/hfNXG7xAOso32Zr+R7KW08Cl+eX8KSWjDcVhN1SuT7ZQfsmVEzesimCejEgEkYbuiCkyFbcQI2So51WCI7rB+cMAU/IMs6il7uJvb09VmQLKOwRfZxHMvfH120vcx9nSYpH96uZvp1miQO7AOyaUVzYVCJwOtYKk+nSaKwFNCOq/0NIvcPsmkFluJjTFA1PIABG5P71DJG8C1Z1WT5xCH6reqoBUeuMCfIRg8k+RkJxLtMUgj0zUZ00PHMhyQbts/vqTq4RHI8MLu15iD8/0NSCFkWm3XJYsBGSKYLJKpjGxZJjkfXuGvcNZZMxliwOVSwD//os3ckhUCBeBLRwZLPb5McfiapuuuxFyQrQDm0ls07Jc8cTJNWNTNAjnVglp/U5UmFgp/gssmSbeu+pkl86SyQbWi8qhuUBmE8T7Y4iT6fxtW1rw5KnLg+SwEbIttzBcM4Bc7Vv2P/fpruAAAAAElFTkSuQmCC">
													<p>Museum</p>
												</div>
											</div>
										</div>
										<div class="facility-col text-center">
											<div class="facility-item">
												<div class="not-exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAK8SURBVEhL7VZLaBRBEB3F/wdPomhQCUmme9RcVq8uipqd7k1EjJKTiBA9mICi4EURvIhXj4qgBxEFUfFu9KI5LH5meg0o4smTv6gYIwbXVz01wWhwenZJTnnQ7M7rrnrVNV3V482gXtTOeLOf6tbVQ13+qoFicQ7T9cHsDZZEob/pTXHtAqb+gdFBl9HyXqzlKH5rNGItPhglLg91+Ot4mTuMClbGSr5lZ1GlXFjEUxaRbm2GwMNxMSXf4/c+Df5fM0qOYE0Pm7gh0vJg6pRGrPytPEVBlbDDz5bXolpVctef6aUMYccnjRY/se5XHPp7eCobUWdbOxkmovJL1LlhBfGU2liJH9ahluf+9z6roQyx6zH4GKYMMZ2NSIsCIj/2IhRt9ByX12/G8zcSRVC9dlEGkp3bzFxgKh9wWpci+tfs5CjTmXjU3bSQdowAPjKVD0j32STt4jZTzkDAA2T7pNSynCk30GGh94wUfzflYA3TzoDwAxJ+XtrYxJQb8K53JymW15hyRqVQmIug38F2lJoM026A4alEWOxnyhnjQStxlyl3QPiKNS6LnUw5AZ1vHgQN2UZKaKbdAeGYjF1LKAVO8nlrh8PFlDtsF0obiRaDTGcC3e2wrXclPtXVs+mSSHabDv84T02KmufNojUkSh3OhME2nsoHE4ojdreoX6RsBGMMqT/B0xNApUaHyAZIa9FeeSo/Uke4CLbAUbetZQpEy8d4BYdi7XcY5R+A0HUqGQ7yFbVbdpEftgZxC8HR12c72hcn4vKW3dHkYxjBnKZ7nF3Uh0jJfeSQdkniE0Vw5dFpV/Iq1TldjS9LLfPZtDFA4FIqBOdomeIOBPuyvkrqRmV78zKUQz99dUDwIgR7Gv6OygKJUr3aXea4/hrCX6KD9MxTUwu8vxvTLkqg1gbRm9MqOoOphef9BpQSm5NGWf6WAAAAAElFTkSuQmCC">
													<p>Bing bong</p>
												</div>
												<div class="exisit">
													<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAK0SURBVEhL7VY7aBRRFF3F/wcrUVRELCxtjK1iwLhx3kwQE7ESEVwLDbhkd2YDCQM2YmunImghkoW4byYhYGO0cms/lVha+Y3iGjEknvPmDjFEsm82nyoHHjt77rv33Ps+dya3ilYRhuHa4oizt6y9PeH48XVCt4aw2rMNgdoQaJNQ8wC752s14mt30o/cGRmf/UjdD2pdB2SaPUqjp3fD+QMDlSP1KozVFjEZVEadg+BfpGJ4/oT5zziSZ/Kq4WvvvLjYAZVcSoOawNo7IaZcKXLzqHBCgr8NIrfr3+XlCpUjNyhr9w/mTZdidVZMzYHgh41jEvx7f+TuIs+lRUW/GRDBby60n36sOuE7hfnfuEJCN0el5hwpa1WsPOk8ZP7H6iiS+UlRXzuXzaQmYOUmea1uC5UNqHQ7RN/L0l8XuimKQ92bWTF8vwiVDaj8RpK5WxPKGqh6nL79Y/mdQtmBh4X7jKx/BbHaL7Q1kOxzk/Rwfp9Qdihp5wwdkfkjoaxRuFNYD+GPGJNsMkLbAcs8QGEkcEEoa6RJY8UioewB4QdGOFYdQlkBnW8DfN8YYe05QtsDy/Q6cba7Qikgeot+PFxC2cN0odlGUhe6KfyauoKEp+HztaWejfvblogmA9n3ien/mMmt4RyKssOhnbaLJRsCra4aUdxfZN/AmEIrLIl5DnjVeIhkdRpsr2LKjjRQoL1j2ONu3mVTuVYvUVnBrzmn0NcvorrHvDJie8d2KyGyQ+7gBIL+6Ht6civFEXQ4qWj+YGvE7yDf4xKiNSDIORMQVVI8FRCOrzye9odIZoCvxt6x/EZxXRwQ9N6sGFum0ni+xgPH0y7Tlg5BtWcH9q2XXx3Yx7v8iljovbskoCiqq0ul1q+/RWGuqKrzv5iWF9jDoRUXJdjaIFpdUdFVLC9yub85mcJI7HAMBwAAAABJRU5ErkJggg==">
													<p>Bing bong</p>
												</div>
											</div>
										</div>
									</div>
                                </div>
							</div>
							<div class="events">
                                <h4 class="">Current Events</h4>
                                <div class="row is-flex">     
									<div class="col-lg-4">
										<div class="event-box keynote">
											<div class="event-top-box">
												<div class="event-type">
													<i class="fa fa-microphone"></i>
													<span>Keynote</span>
												</div>
												<div class="event-title">
													<p class="text-center">Welcome Keynote</p>
												</div>
												<div class="event-avatar">
													<img src="/bimunity/images/team7.jpg" alt="">
												</div>
											</div>
											<div class="event-details">
												<div class="speaker text-center">
													<p>
														<span>Speaker</span>
														Mohammed Galal
													</p>
												</div>
												<div class="attend-details text-center">
													<label>date</label>
													<span>July 10, 2015</span>
												</div>
												<div class="attend-details text-center">
													<label>time</label>
													<span>11:30 AM</span>
												</div>
												<div class="attend-details text-center">
													<label>duration</label>
													<span>60 min</span>
												</div>
												<div class="attend-details text-center">
													<label>location</label>
													<span>main hall</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="event-box workshop">
											<div class="event-top-box">
												<div class="event-type">
													<img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADSSURBVDhPlY2hCgJBFEVHg3GboMmfMBgtgkWwaLUKBpvNahSD/oB/YrXaTGZBEIOWdcdzd94KIrLugcvMvHfPrsvw3pdJmwySJOmQhma2zodyH+nE6TnPZGKrfChXyV6y4D6zVT70awi3oBaQ6ZYoH4KWineOiq1/Q7FJ4qAFeG9IzyqfsNeflqRLhuRCFuQZ9PQDY6sHmEla2/JBJEfacR41F9ynqSB4vyXjyrtla4kjEpO5jfKlDGZ1u/4vfUFpZYL4TxIUd4UlQTki20KSc+4Fcb47gDyDH6EAAAAASUVORK5CYII=">
													<span>WorkShop</span>
												</div>
												<div class="event-title">
													<p class="text-center">Welcome Keynote</p>
												</div>
												<div class="event-avatar">
													<img src="/bimunity/images/team7.jpg" alt="">
												</div>
											</div>
											<div class="event-details">
												<div class="speaker text-center">
													<p>
														<span>Speaker</span>
														Mohammed Galal
													</p>
												</div>
												<div class="attend-details text-center">
													<label>date</label>
													<span>July 10, 2015</span>
												</div>
												<div class="attend-details text-center">
													<label>time</label>
													<span>11:30 AM</span>
												</div>
												<div class="attend-details text-center">
													<label>duration</label>
													<span>60 min</span>
												</div>
												<div class="attend-details text-center">
													<label>location</label>
													<span>main hall</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="event-box keynote">
											<div class="event-top-box">
												<div class="event-type">
													<i class="fa fa-microphone"></i>
													<span>Keynote</span>
												</div>
												<div class="event-title">
													<p class="text-center">Welcome Keynote</p>
												</div>
												<div class="event-avatar">
													<img src="/bimunity/images/team7.jpg" alt="">
												</div>
											</div>
											<div class="event-details">
												<div class="speaker text-center">
													<p>
														<span>Speaker</span>
														Mohammed Galal
													</p>
												</div>
												<div class="attend-details text-center">
													<label>date</label>
													<span>July 10, 2015</span>
												</div>
												<div class="attend-details text-center">
													<label>time</label>
													<span>11:30 AM</span>
												</div>
												<div class="attend-details text-center">
													<label>duration</label>
													<span>60 min</span>
												</div>
												<div class="attend-details text-center">
													<label>location</label>
													<span>main hall</span>
												</div>
											</div>
										</div>
									</div>
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