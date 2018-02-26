{{-- Tasks --}}
<li class="nav-item {!! (Request::is('*sysColumns*') || Request::is('*sysTables*') || Request::is('*adminModules*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-tasks"></i>
        <span class="title">Admin DataBase</span>
        <span class="arrow  {!! (Request::is('*sysColumns*') || Request::is('*sysTables*') || Request::is('*adminModules*') ) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*sysColumns*') || Request::is('*sysTables*') || Request::is('*adminModules*') ) ? 'display: block;' : '' !!}">
        <li class="{!! (Request::is('*adminModules*')) ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!!  route('adminModules.index') !!}">
                <span  class="title">Modules</span>
            </a>
        </li>
        <li class="{!! Request::is('*sysTables*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! route('sysTables.index') !!}">
                <span  class="title">Tables</span>
            </a>
        </li>
        <li class="{!! Request::is('*sysColumns*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! route('sysColumns.index') !!}">
                <span  class="title">Columns</span>
            </a>
        </li>
    </ul>
</li>
