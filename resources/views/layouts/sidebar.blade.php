<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper" style="left:-60px">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <div class="row clearfix">
            
            <div class="col-lg-3 ifm-no-padding-right">
                <!-- BEGIN SYSTEM SIDEBAR MENU -->
                <ul id="portalsside" class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false"
                    data-auto-scroll="false" data-slide-speed="200" style="padding-top:0px">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <li class="sidebar-toggler-wrapper hide">
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler"></div>
                        <!-- END SIDEBAR TOGGLER BUTTON -->
                    </li>
                     
                </ul>
                <!-- END SYSTEM SIDEBAR MENU -->
            </div>
            <div class="col-lg-9 ifm-no-padding-left">
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false"
                    data-auto-scroll="false" data-slide-speed="200">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <li class="sidebar-toggler-wrapper hide">
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler"></div>
                        <!-- END SIDEBAR TOGGLER BUTTON -->
                    </li>
                    
                        @include('layouts.menu_property')
                        {{--@include('layouts.menu_gov')--}}
                    
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
