<ul>
    @if(\Auth::check())
        <li class="mega-menu">
            <a href="/users/{{\Auth::user()->id}}" class="nav-link avatar">
                <img src="{{\Auth::user()->picture_url}}" alt="">
                <span>{{\Auth::user()->name}}</span>
            </a>
        </li>
        <li class="mega-menu">
            <a href="/logout" class="nav-link avatar">
                <i class="icon-logout"></i>
                <span>Logout</span>
            </a>
        </li>
    @else   
         <li class="mega-menu">
            <a href="/login" class="nav-link" style="color:#fff">
                <i class="icon-login"></i>
                <span>Login</span>
            </a>
        </li>
    @endif    
    <!-- <li class="current">
        <a class="nav-link" data-scroll href="#header"><div>Home</div></a>
    </li>
    <li class="mega-menu">
        <a class="nav-link" data-scroll href="#logic"><div>Our Logic</div></a>
    </li>
    <li class="mega-menu">
        <a class="nav-link" data-scroll href="#platform"><div>Platforms</div></a>
    </li>
    <li class="mega-menu">
        <a class="nav-link" data-scroll href="#prototyps"><div>Prototypes</div></a>
    </li>
    <li class="mega-menu">
        <a class="nav-link" data-scroll href="#features"><div>Features</div></a>
    </li>
    <li class="mega-menu">
        <a class="nav-link" data-scroll href="#users"><div>Users</div></a>
    </li>
    <li class="mega-menu">
        <a class="nav-link" data-scroll href="#contact"><div>Contact US</div></a>
    </li> -->
    {{--@if(\Auth::user()) --}}
        {{--<li><a href="/login" class="dashboard" style="color:#FFFFFF;padding-right:15px;margin-left:15px;background-color:#A7A8AA"><i class="icon-speedometer"></i> Dashboard</a></li>--}}
    {{--@else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle login" style="color:#FFFFFF;padding-right:15px;margin-left:15px;background-color:#68c0d8" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-power-off"></i> Login <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/login" class="nomargin"><i class="fa fa-user"></i> Login</a></li>
                <li><a href="/register" class="nomargin"><i class="fa fa-pencil"></i> Register</a></li>
                <li><a href="/guest" class="nomargin"><i class="fa fa-pencil"></i> Guest</a></li>
            </ul>
        </li>
    @endif--}}
</ul>