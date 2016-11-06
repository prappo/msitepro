﻿﻿
<html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9">    <![endif]-->
<head>

    <meta charset="utf-8">
    <title>Soundmaster</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <!-- Style Sheet-->
    <link rel="stylesheet" type="text/css" href="css/style.min.css" media="screen">
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>

<!-- BODY -->

<body>

<!-- HEADER -->

<header>
    <div class="top-search">
        <div class="center">
            <form method="post">
                <input type="text" placeholder="Type here to search">
                <input type="submit" class="button small style-4" value="search">
            </form>
            <!-- close -->
            <a href="#" class="button small style-5 search-toggle">close</a>
        </div>
    </div>
    <div class="top-menu">
        <div class="center">
            <!-- logo -->
            <div class="logo">
                <span class="align"></span>
                <a href="index.html">
                    <img src="img/logo.png" alt="logo">
                </a>
            </div>
            <!-- menu -->
            <ul class="menu main">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="author_list.html">Bands</a></li>
                <li><a href="news_list.html">News</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <!-- mobile menu trigger -->
            <span class="shifter-handle"></span>
            <!-- avatar -->
            @if(Auth::guest())
            @else
                <div class="avatar">
                    <a href="{{url('/home')}}">Me</a>
                   <img src="{{url('img/me.jpg')}}" alt="avatar">
                </div>
        @endif
        <!-- menu extra -->
            <ul class="menu extra">
                <li><a class="search-toggle" href="#">Search</a></li>
                @if(Auth::guest())
                    <li><a class="mobile-hide" href="{{url('/register')}}">Register</a></li>
                @else
                    <li><a target="_blank" href="{{url('/profile')}}">{{Auth::user()->name}}</a></li>
                @endif
                <li>@if (Auth::guest()) <a  class="mobile-hide"
                                           href="{{url('/login')}}"> Log in</a> @else <a class="mobile-hide" href="{{url('/logout')}}"> Log out</a> @endif

                </li>
            </ul>
        </div>
    </div>
</header>

<!-- /HEADER -->

<!-- CONTENT-->

@yield('content')

<!-- /CONTENT-->

<!-- MOBILE MENU -->

<nav class="shifter-navigation">
    <!-- side nav-top -->
    <div class="side-nav-top">
        <div class="one-third">
            <!-- avatar -->
            @if(Auth::guest())
            @else
                <div class="avatar">
                    <a href="#">12</a>
                    <img src="img/avatar.jpg" alt="avatar">
                </div>
            @endif
        </div>
        <div class="two-third last">
            <!-- menu extra -->
            <ul class="menu extra">
                <li><a class="mobile-hide" href="shop_list.html">Shop items</a></li>
                <li>@if (Auth::guest()) <a class="mobile-hide" href="{{url('/login')}}"> Log in</a> @else <a
                            class="mobile-hide" href="{{url('/logout')}}"> Log out</a> @endif

                </li>
            </ul>
        </div>
    </div>
    <!-- side nav menu -->
    <ul class="side-nav-menu">
        <li class="top-menu"><a href="#">Home</a></li>
        <li class="sub-menu"><a href="index.html">Main home</a></li>
        <li class="sub-menu"><a href="onepage.html">One page version</a></li>
        <li class="top-menu"><a href="#">Events</a></li>
        <li class="sub-menu"><a href="event_list.html">Event list</a></li>
        <li class="sub-menu"><a href="event_list2.html">Event list 2</a></li>
        <li class="sub-menu"><a href="event_list3.html">Event list 3</a></li>
        <li class="sub-menu"><a href="event_open.html">Single event</a></li>
        <li class="top-menu"><a href="#">Discography</a></li>
        <li class="sub-menu"><a href="album_list.html">Album list</a></li>
        <li class="sub-menu"><a href="album_list2.html">Album list 2</a></li>
        <li class="sub-menu"><a href="album_open.html">Single album</a></li>
        <li class="top-menu"><a href="#">News</a></li>
        <li class="sub-menu"><a href="news_list.html">News list</a></li>
        <li class="sub-menu"><a href="news_list2.html">News list 2</a></li>
        <li class="sub-menu"><a href="news_open.html">Single news <br>(disquss comments)</a></li>
        <li class="sub-menu"><a href="news_open2.html">Single news <br>(standard comments)</a></li>
        <li class="top-menu"><a href="#">Videos</a></li>
        <li class="sub-menu"><a href="video_list.html">Video list</a></li>
        <li class="sub-menu"><a href="video_list2.html">Video list 2</a></li>
        <li class="sub-menu"><a href="video_open.html">Single video</a></li>
        <li class="top-menu"><a href="#">Gallery</a></li>
        <li class="sub-menu"><a href="gallery_list.html">Gallery list</a></li>
        <li class="sub-menu"><a href="gallery_list2.html">Gallery list 2</a></li>
        <li class="sub-menu"><a href="gallery_open.html">Single gallery</a></li>
        <li class="sub-menu"><a href="gallery_open2.html">Single fullwidth gallery</a></li>
        <li class="top-menu"><a href="#">Shop</a></li>
        <li class="sub-menu"><a href="shop_list.html">Shop item list</a></li>
        <li class="sub-menu"><a href="shop_open.html">Shop single item </a></li>
        <li class="sub-menu"><a href="shop_cart.html">Shop cart</a></li>
        <li class="top-menu"><a href="#">pages</a></li>
        <li class="sub-menu"><a href="about.html">About us</a></li>
        <li class="sub-menu"><a href="contact.html">Contact</a></li>
        <li class="sub-menu"><a href="author_list.html">Author list</a></li>
        <li class="sub-menu"><a href="author_list2.html">Author list 2</a></li>
        <li class="sub-menu"><a href="author_open.html">Author single</a></li>
        <li class="sub-menu"><a href="blog_list.html">Blog list</a></li>
        <li class="sub-menu"><a href="blog_open.html">Blog open</a></li>
        <li class="top-menu"><a href="#">More</a></li>
        <li class="sub-menu"><a href="page_404.html">Page 404</a></li>
        <li class="sub-menu"><a href="page-countdown.html">Countdown</a></li>
        <li class="sub-menu"><a href="page-table.html">Pricing table</a></li>
        <li class="sub-menu"><a href="faq.html">Faq</a></li>
        <li class="sub-menu"><a href="grid.html">Grid</a></li>
        <li class="sub-menu"><a href="shortcodes.html">Shortcodes</a></li>
        <li class="sub-menu"><a href="left-sidebar.html">Left Sidebar</a></li>
    </ul>
</nav>

<!-- /MOBILE MENU -->

<!-- ATTACHMENTS -->

<script type="text/javascript" src="js/libs/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/libs/jquery.migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/libs/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/libs/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="js/libs/placeholdem.js"></script>
<script type="text/javascript" src="js/libs/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/libs/hover.js"></script>
<script type="text/javascript" src="js/libs/wait.js"></script>
<script type="text/javascript" src="js/libs/jquery.fs.shifter.min.js"></script>
<script type="text/javascript" src="js/libs/jquery.plugin.js"></script>
<script type="text/javascript" src="js/libs/jquery.countdown.js"></script>

<!-- Gallery -->

<script type="text/javascript" src="js/libs/lightGallery.min.js"></script>

<!-- Player -->

<script type="text/javascript" src="js/libs/jquery.jplayer.js"></script>
<script type="text/javascript" src="js/libs/ttw-music-player.js"></script>
<script type="text/javascript" src="js/playlist-home.js"></script>

<!-- Custom Js -->

<script type="text/javascript" src="js/custom.js"></script>

<!-- /ATTACHMENTS -->

</body>

<!-- /BODY -->

</html>