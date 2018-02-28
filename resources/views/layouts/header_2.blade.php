<!-- Header
============================================= -->
<header id="header" class="full-header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="fa fa-bars fa-2x"></i></div>

            <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="/" class="standard-logo" data-dark-logo="/bimunity/images/school_logo.png"><img src="/bimunity/images/school_logo.png" alt="Canvas Logo"></a>
                    <a href="/" class="retina-logo" data-dark-logo="/bimunity/images/school_logo.png"><img src="/bimunity/images/school_logo.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

            <!-- Left Navigation
                ============================================= -->
                <nav id="primary-menu" class="pull-left">
                    <ul class="left-nav">
                        <li class="mega-menu">
                            <a class="nav-link" href="/"><div>Home</div></a>
                        </li>
                        <li class="mega-menu">
                            <a class="nav-link" href="/see_more/events"><div>Schools</div></a>
                        </li>
                    </ul>
                </nav><!-- #left navigation end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">
                @include('guest::menu')
            </nav><!-- #primary-menu end -->
        </div>
    </div>
</header><!-- #header end -->