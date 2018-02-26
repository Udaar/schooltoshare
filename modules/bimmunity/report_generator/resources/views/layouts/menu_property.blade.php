<link rel="stylesheet" href="/metronic/reset/themes/green.css">

<li class="{!! Request::is('home*') ? 'active' : '' !!}">
    <a href="{!! url('/home') !!}" class="nav-link nav-toggle">
        <i class="icon-home"></i>
        <span class="title">Home</span>
    </a>
</li>

<li class="{!! Request::is('fileTables*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('fileTables.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">FileTables</span></a>
</li>

<li class="{!! Request::is('fileTables*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="/create_report">
    <i class="fa fa-edit"></i>
    <span  class="title">Create Report</span></a>
</li>