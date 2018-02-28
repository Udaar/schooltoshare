<link rel="stylesheet" href="/metronic/reset/themes/red.css">

{{-- Home --}}
    <li class="nav-item start {!! Request::is('home') ? ' active' : '' !!}">
        <a href="{!! url('/home') !!}" class="nav-link ifm-text-left nav-toggle">
            <i class="fa fa-home"></i>
            <span class="title">Home</span>
        </a>
    </li>
    <li class="nav-item start {!! Request::is('facilities') ? ' active' : '' !!}">
        <a href="{!! url('/facilities') !!}" class="nav-link ifm-text-left nav-toggle">
            <i class="fa fa-building"></i>
            <span class="title">School Facility</span>
        </a>
    </li>
    <li class="nav-item start {!! Request::is('requests') ? ' active' : '' !!}">
        <a href="{!! url('/requests') !!}" class="nav-link ifm-text-left nav-toggle">
            <i class="fa fa-ticket"></i>
            <span class="title">Sharing Manager</span>
        </a>
    </li>
    <li class="nav-item start {!! Request::is('inf_news_event') ? ' active' : '' !!}">
        <a href="{!! url('/inf_news_event') !!}" class="nav-link ifm-text-left nav-toggle">
            <i class="fa fa-info-circle"></i>
            <span class="title">Info, News ,Events</span>
        </a>
    </li>

{{-- File manager --}}
<li class="nav-item {!! (Request::is('*laravel-filemanager?type=Images*')) || (Request::is('*laravel-filemanager?type=Files*')) ?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-folder"></i>
        <span class="title">File Manager</span>
        <span class="arrow  {!! (Request::is('*laravel-filemanager?type=Images*'))|| (Request::is('*laravel-filemanager?type=Files*'))  ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*laravel-filemanager?type=Images*')) ? 'display: block;' : '' !!}">
        <li class="{!! Request::is('*laravel-filemanager?type=Images*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('/laravel-filemanager?type=Images') !!}">
                    <span  class="title">Images</span>
                </a>
        </li>
        <li class="{!! Request::is('*laravel-filemanager?type=Files*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('/laravel-filemanager?type=Files') !!}">
                    <span  class="title">Files</span>
                </a>
        </li>
    </ul>
    
</li>
{{-- Bimmodels --}}

    @include('bimmunity/invoice::side_menu')

{{-- Inventory --}}
    @include('inventory::side_menu')


{{-- Setting --}}
    {{--  <li class="nav-item {!! (Request::is('*facilitybuildingrelation*')) || (Request::is('*serviceproviderbuildingrelation*')) || (Request::is('*tenantZoneRelations*'))?'active' :'' !!}">
        <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
            <i class="fa fa-cogs"></i>
            <span class="title">Settings</span>
            <span class="arrow  {!! (Request::is('*facilitybuildingrelation*'))|| (Request::is('*serviceproviderbuildingrelation*')) || (Request::is('*tenantZoneRelations*')) ? 'open' : '' !!}"></span>
        </a>
        <ul class="sub-menu" style= "{!! (Request::is('*facilitybuildingrelation*')) ? 'display: block;' : '' !!}">
            <li class="{!! Request::is('*facilitybuildingrelation*') ? 'active' : '' !!}">
                    <a class="nav-link ifm-text-left" href="{!! url('facilitybuildingrelation') !!}">
                        <span  class="title">Facility building</span>
                    </a>
            </li>
            <li class="{!! Request::is('*serviceproviderbuildingrelation*') ? 'active' : '' !!}">
                    <a class="nav-link ifm-text-left" href="{!! url('serviceproviderbuildingrelation') !!}">
                        <span  class="title">Service Provider building</span>
                    </a>
            </li>
            <li class="{!! Request::is('*tenantZoneRelations*') ? 'active' : '' !!}">
                    <a class="nav-link ifm-text-left" href="{!! url('pm/tenantZoneRelations') !!}">
                        <span  class="title">Tenant Zone </span>
                    </a>
            </li>
        </ul>
        
    </li>  --}}

{{-- Directory --}}
    {{--  <li class="nav-item {!! (Request::is('*users*'))?'active' :'' !!}">
        <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
            <i class="fa fa-user"></i>
            <span class="title">Directory</span>
            <span class="arrow  {!! (Request::is('*users*')) ? 'open' : '' !!}"></span>
        </a>
        <ul class="sub-menu" style= "{!! (Request::is('*users*')) ? 'display: block;' : '' !!}">
            <li class="{!! (Request::is('*users*')) ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('users') !!}">
                    <span  class="title">My Team</span>
                </a>
            </li>
            <li class="{!! Request::is('*usersByType/Property Manager*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('usersByType/Property Manager') !!}">
                    <span  class="title">Property Managers</span>
                </a>
            </li>
            <li class="{!! Request::is('*usersByType/Facility Manager*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('usersByType/Facility Manager') !!}">
                    <span  class="title">Facility Managers</span>
                </a>
            </li>
            <li class="{!! Request::is('*usersByType/Service Provider*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('usersByType/Service Provider') !!}">
                    <span  class="title">Service Providers</span>
                </a>
            </li>
            <li class="{!! Request::is('*usersByType/Tenant*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('usersByType/Tenant') !!}">
                    <span  class="title">Tenants</span>
                </a>
            </li>
        </ul>
    </li>  --}}



           
{{-- admindbchange --}}
@include('admindbchange::side_menu')
{{-- Report --}}
<li class="{!! Request::is('*reportGenerators*') ? 'active' : '' !!}">
    <a class="nav-link ifm-text-left" href="{!! url('reportGenerators') !!}">
        <i class="fa fa-pie-chart"></i>
        <span  class="title">Report Generator</span>
    </a>
</li>

