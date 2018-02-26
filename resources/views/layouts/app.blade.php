<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
@include('layouts/head')
@stack('head')
@yield('head')
<style>
    @media screen and (min-width: 991px){
        .page-sidebar-wrapper .slimScrollDiv {
            width: auto !important;
        }
    }
</style>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
    
        <section class="loading-overlay">
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
        </section>
@if (!Auth::guest())
@include('layouts/header')

<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->

<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    @include('layouts.sidebar')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">

            <!-- BEGIN PAGE HEADER-->
            {{-- @include('layouts/page_header') --}}
            <!-- END PAGE HEADER-->

            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
@else

<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="/metronic/assets/layouts/layout/img/ifm_logo.png" alt="logo" class="logo-default"/> </a>
            <div class="menu-toggler sidebar-toggler"></div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="{!! url('/login') !!}" class="dropdown-toggle" data-hover="dropdown"
                       data-close-others="true">
                        <span class="username ">login</span></a>
                </li>
                <li class="dropdown dropdown-user">
                    <a href="{!! url('/register') !!}" class="dropdown-toggle" data-hover="dropdown"
                       data-close-others="true">
                        <span class="username"> Register</span></a>
                </li>
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->

<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->

<!-- BEGIN CONTAINER -->
<div class="page-container">

    <!-- BEGIN SIDEBAR -->
    @include('layouts.sidebar')
    <!-- END SIDEBAR -->

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">



            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
@endif
@include('layouts/quick_sidebar')
@include('layouts/footer')
@include('layouts/mainJS')
@stack('scripts')
@yield('scripts')
<!-- Datatables -->

<script>
    $(window).load(function(){
        $('.loading-overlay .sk-circle').fadeOut(2000, function(){
            $(this).parent().fadeOut(2000, function(){
                $('body').css("overflow-y", "auto");
            });
        });
    });

    $( document ).ready(function() {
        if($(window).width() > 991){
            $('.page-sidebar-menu').slimScroll({
                'height': '90vh',
                size: '5px',
                color: '#C9C9C9',
                position: 'left',
                alwaysVisible: true
            });
        }
        if($(window).width() < 480){
            // sample_1 table

            $("#sample_1_filter label").contents().filter(function () {
                return this.nodeType === 3;
            }).remove();
            $("#sample_1_filter label input").attr('placeholder', 'Search ...');
            $("#sample_1_length label").contents().filter(function () {
                return this.nodeType === 3;
            }).remove();

            // example_1 table

            $("#example_1_filter label").contents().filter(function () {
                return this.nodeType === 3;
            }).remove();
            $("#example_1_filter label input").attr('placeholder', 'Search ...');
            $("#example_1_length label").contents().filter(function () {
                return this.nodeType === 3;
            }).remove();
        }

        $('.system-collapse').on('click', function(){
            var that = $(this);
            var page_sidebar_wrapper = $('.page-sidebar-wrapper');
            var page_content = $('.page-content');
            var icon = $('.system-collapse i');
            if(icon.hasClass('fa-angle-double-right')){
                page_sidebar_wrapper.animate({
                    left:'0px'
                },150);
                page_content.animate({
                    left:'60px'
                },150);
                icon.removeClass('fa-angle-double-right').addClass('fa-angle-double-left');
            }
            else if(icon.hasClass('fa-angle-double-left')){
                page_sidebar_wrapper.animate({
                    left:'-60px'
                },150);
                page_content.animate({
                    left:'0px'
                },150);
                icon.removeClass('fa-angle-double-left').addClass('fa-angle-double-right');
            }
        });

    });
</script>

<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>
