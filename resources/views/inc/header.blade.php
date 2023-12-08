<header class="header-one">
    <!-- Start top bar -->
    <div class="topbar-area fix hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@sanafi4.com</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> +909-654-9805</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-md-6 col-sm-6">
                    <div class="topbar-right">
                        <div class="top-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                        <div class="quote-button">
                            <a href="#" class="quote-btn" title="Quick view" data-toggle="modal"
                                data-target="#quoteModal">Book a Tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->
    <!-- header-area start -->
    <div id="sticker" class="header-area hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll white-logo" href="/">
                                    <img src="{{ config('app.url') }}/img/logo/logo.jpeg" style="max-height: 45px;" alt="">
                                </a>
                                <a class="navbar-brand page-scroll black-logo" href="/">
                                    <img src="{{ config('app.url') }}/img/logo/logo.png" style="max-height: 45px;" alt="">
                                </a>
                            </div>
                            <!-- logo end -->
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="header-right-link">
                                <form action="#">
                                    <div class="search-option">
                                        <input type="text" placeholder="Search...">
                                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a class="pages" href="/">Home</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/">Home 01</a></li>
                                                    <li><a href="{{ route('home-2') }}">Home 02</a></li>
                                                    <li><a href="{{ route('home-3') }}">Home 03</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="pages" href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('about') }}">About</a></li>
                                                    <li><a href="{{ route('team') }}">team</a></li>
                                                    <li><a href="{{ route('gallery') }}">Photo Gallery</a></li>
                                                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                                                    <li><a href="{{ route('review') }}">Review</a></li>
                                                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="pages" href="#">Workspace</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('workspace') }}">Workspace</a></li>
                                                    <li><a href="{{ route('workspace-details') }}">Workspace Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="pages" href="#">Events</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('events') }}">Events</a></li>
                                                    <li><a href="{{ route('events-details') }}">Events Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="pages" href="#">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('blog') }}">Blog grid</a></li>
                                                    <li><a href="{{ route('blog-sidebar') }}">Blog Sidebar</a></li>
                                                    <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('contact') }}">contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="/"><img src="{{ config('app.url') }}/img/logo/logo.png" alt="" /></a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                <li><a class="pages" href="/">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="/">Home 01</a></li>
                                        <li><a href="{{ route('home-2') }}">Home 02</a></li>
                                        <li><a href="{{ route('home-3') }}">Home 03</a></li>
                                    </ul>
                                </li>
                                <li><a class="pages" href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('team') }}">team</a></li>
                                        <li><a href="{{ route('gallery') }}">Photo Gallery</a></li>
                                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                                        <li><a href="{{ route('review') }}">Review</a></li>
                                        <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                    </ul>
                                </li>
                                <li><a class="pages" href="#">Workspace</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('workspace') }}">Workspace</a></li>
                                        <li><a href="{{ route('workspace-details') }}">Workspace Details</a></li>
                                    </ul>
                                </li>
                                <li><a class="pages" href="#">Events</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('events') }}">Events</a></li>
                                        <li><a href="{{ route('events-details') }}">Events Details</a></li>
                                    </ul>
                                </li>
                                <li><a class="pages" href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('blog') }}">Blog grid</a></li>
                                        <li><a href="{{ route('blog-sidebar') }}">Blog Sidebar</a></li>
                                        <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact') }}">contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
