@extends('site.main')
@section('content')
    <div class="shifter-page"> <!-- for mobile version -->

        <!-- slider -->

        <div class="slider-wrapp">
            <div class="main-slider">
                <!-- item -->
                <div class="item img-1">
                    <div class="cover">
                        <div class="center">
                            <div class="content">
                                <span class="subtitle">Sed in libero pulvinar, congue mi et, elit.</span>
                                <h1>Live music festival</h1>
                                <p>
                                    Mauris dapibus orci a dignissim congue. Morbi lacus ante, vestibulum et lectus
                                    vitae,
                                    emper laoreet lectus. Donec at dictum ipsum, eu venenatis nulla. Vivamus viverra
                                    nunc vitae
                                    neque euismod, eget pretium erat varius. Nullam eget diam tortor.
                                </p>
                                <a href="#" class="button big style-1">
                                    read more
                                    <span class="detail"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="item img-2">
                    <div class="cover">
                        <div class="center">
                            <div class="content">
                                <span class="subtitle">Donec gravida tincidunt tortor.</span>
                                <h1>Enjoy the world's sounds</h1>
                                <p>
                                    Mauris dapibus orci a dignissim congue. Morbi lacus ante, vestibulum et lectus
                                    vitae,
                                    emper laoreet lectus. Donec at dictum ipsum, eu venenatis nulla. Vivamus viverra
                                    nunc vitae
                                    neque euismod, eget pretium erat varius. Nullam eget diam tortor.
                                </p>
                                <a href="#" class="button big style-1">
                                    read more
                                    <span class="detail"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="item img-3">
                    <div class="cover">
                        <div class="center">
                            <div class="content">
                                <span class="subtitle">Donec gravida tincidunt tortor.</span>
                                <h1>New album review</h1>
                                <p>
                                    Mauris dapibus orci a dignissim congue. Morbi lacus ante, vestibulum et lectus
                                    vitae,
                                    emper laoreet lectus. Donec at dictum ipsum, eu venenatis nulla. Vivamus viverra
                                    nunc vitae
                                    neque euismod, eget pretium erat varius. Nullam eget diam tortor.
                                </p>
                                <a href="#" class="button big style-1">
                                    read more
                                    <span class="detail"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="item img-4">
                    <div class="cover">
                        <div class="center">
                            <div class="content">
                                <span class="subtitle">Donec gravida tincidunt tortor.</span>
                                <h1>Music for life</h1>
                                <p>
                                    Mauris dapibus orci a dignissim congue. Morbi lacus ante, vestibulum et lectus
                                    vitae,
                                    emper laoreet lectus. Donec at dictum ipsum, eu venenatis nulla. Vivamus viverra
                                    nunc vitae
                                    neque euismod, eget pretium erat varius. Nullam eget diam tortor.
                                </p>
                                <a href="#" class="button big style-1">
                                    read more
                                    <span class="detail"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="photo-cover"></div>
        </div>

        <!-- /slider -->

        <div class="clearfix"></div>

        <!-- nav -->

        <nav class="nav-main-menu">

            <!-- countdown -->

            <div class="countdown-position">
                <span>Next event in:</span>
                <a href="event_open.html">
                    <div id="countdown"></div>
                </a>
            </div>

            <!-- /countdown -->

            <!-- menu -->

            <ul class="menu">
                <li><a class="submenu current" href="#">home<span>&#xf0dd;</span></a>
                    <ul>
                        <li><a href="index.html">main home</a></li>
                        <li><a href="onepage.html">one page version</a></li>
                    </ul>
                </li>
                <li><a class="submenu" href="#">events<span>&#xf0dd;</span></a>
                    <ul>
                        <li><a href="event_list.html">events list</a></li>
                        <li><a href="event_list2.html">events list 2</a></li>
                        <li><a href="event_list3.html">events list 3</a></li>
                        <li><a href="event_open.html">single event</a></li>
                    </ul>
                </li>
                <li><a class="submenu" href="#">discography<span>&#xf0dd;</span></a>
                    <ul>
                        <li><a href="album_list.html">album list</a></li>
                        <li><a href="album_list2.html">album list 2</a></li>
                        <li><a href="album_open.html">single album</a></li>
                    </ul>
                </li>
                <li><a class="submenu" href="#">news<span>&#xf0dd;</span></a>
                    <ul>
                        <li><a href="news_list.html">news list</a></li>
                        <li><a href="news_list2.html">news list 2</a></li>
                        <li><a href="news_open.html">single news <br>(disquss comments)</a></li>
                        <li><a href="news_open2.html">single news <br>(standard comments)</a></li>
                    </ul>
                </li>
                <li><a class="submenu" href="#">videos<span>&#xf0dd;</span></a>
                    <ul>
                        <li><a href="video_list.html">videos list</a></li>
                        <li><a href="video_list2.html">videos list 2</a></li>
                        <li><a href="video_open.html">single video</a></li>
                    </ul>
                </li>
                <li><a class="submenu" href="#">galleries<span>&#xf0dd;</span></a>
                    <ul>
                        <li><a href="gallery_list.html">galleries list</a></li>
                        <li><a href="gallery_list2.html">galleries list 2</a></li>
                        <li><a href="gallery_open.html">single gallery</a></li>
                        <li><a href="gallery_open2.html">single fullwidth gallery</a></li>
                    </ul>
                </li>
                <li><a class="submenu" href="#">shop<span>&#xf0dd;</span></a>
                    <ul>
                        <li><a href="shop_list.html">shop item list</a></li>
                        <li><a href="shop_open.html">shop single item </a></li>
                        <li><a href="shop_cart.html">shop cart</a></li>
                    </ul>
                </li>
                <li><a class="submenu" href="#">pages<span>&#xf0dd;</span></a>
                    <ul>
                        <li><a href="about.html">about us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="author_list.html">author list</a></li>
                        <li><a href="author_list2.html">author list 2</a></li>
                        <li><a href="author_open.html">author single</a></li>
                        <li><a href="blog_list.html">blog list</a></li>
                        <li><a href="blog_open.html">blog open</a></li>
                    </ul>
                </li>
                <li><a class="submenu" href="#">more<span>&#xf0dd;</span></a>
                    <ul>
                        <li><a href="page_404.html">page 404</a></li>
                        <li><a href="page-countdown.html">countdown</a></li>
                        <li><a href="page-table.html">pricing table</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="grid.html">Grid</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
                    </ul>
                </li>
            </ul>

            <!-- /menu -->

            <!-- social -->

            <ul class="social">
                <li><a href="#"><span>&#xf082;</span></a></li>
                <li><a href="#"><span>&#xf099;</span></a></li>
                <li><a href="#"><span>&#xf16a;</span></a></li>
                <li><a href="#"><span>&#xf0e1;</span></a></li>
            </ul>

            <!-- /social -->

        </nav>

        <!-- /nav -->

        <div class="clearfix"></div>

        <!-- main content -->

        <div class="main-content">

            <!-- ######################### /HOME PLAYER & ALBUMS ######################### -->

            <div class="one-half main-player-wrapp">

                <!-- title -->
                <div class="title">
                    <h2><strong>What’s new</strong> playlist</h2>
                    <div class="detail"></div>
                    <a href="album_list.html" class="semibold">view more</a>
                </div>

                <!-- music player -->

                <div class="main-player"></div>

                <!-- /music player -->

            </div>

            <div class="one-half last main-albums-wrapp">

                <!-- title -->
                <div class="title">
                    <h2><strong>Discover</strong> albums</h2>
                    <div class="detail"></div>
                </div>

                <!-- album slider -->

                <div class="album-slider big-album-slider content-slider">
                    <!-- item -->
                    <div class="item">
                        <div class="dim">
                            <div class="cover">
                                <div class="data">
                                    <a class="bold name" href="#">
                                        Pink Hex: 5 Count
                                    </a>
                                    <a class="medium genre" href="#">
                                        jazz
                                    </a>
                                    <ul>
                                        <li>
                                            <span class="medium">Artists:</span>
                                            <a href="author_open.html">Pellentesque tincidunt</a>
                                        </li>
                                        <li>
                                            <span class="medium">Release date:</span>
                                            <span>May 18, 2015</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <img src="img/albums/1.jpg" alt="album">
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="dim">
                            <div class="cover">
                                <div class="data">
                                    <a class="bold name" href="#">
                                        Wooden Ambulance: Intersection
                                    </a>
                                    <a class="medium genre" href="#">
                                        jazz
                                    </a>
                                    <ul>
                                        <li>
                                            <span class="medium">Artists:</span>
                                            <a href="author_open.html">Pellentesque tincidunt</a>
                                        </li>
                                        <li>
                                            <span class="medium">Release date:</span>
                                            <span>June 23, 2015</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <img src="img/albums/2.jpg" alt="album">
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="dim">
                            <div class="cover">
                                <div class="data">
                                    <a class="bold name" href="#">
                                        Hey You Guys
                                    </a>
                                    <a class="medium genre" href="#">
                                        Hip-Hop
                                    </a>
                                    <ul>
                                        <li>
                                            <span class="medium">Artists:</span>
                                            <a href="author_open.html">Pellentesque tincidunt</a>
                                        </li>
                                        <li>
                                            <span class="medium">Release date:</span>
                                            <span>June 05, 2015</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <img src="img/albums/3.jpg" alt="album">
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="dim">
                            <div class="cover">
                                <div class="data">
                                    <a class="bold name" href="#">
                                        Mark of The Beast (EP)
                                    </a>
                                    <a class="medium genre" href="#">
                                        Pop
                                    </a>
                                    <ul>
                                        <li>
                                            <span class="medium">Artists:</span>
                                            <a href="author_open.html">Pellentesque tincidunt</a>
                                        </li>
                                        <li>
                                            <span class="medium">Release date:</span>
                                            <span>June 17, 2015</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <img src="img/albums/4.jpg" alt="album">
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="dim">
                            <div class="cover">
                                <div class="data">
                                    <a class="bold name" href="#">
                                        Be Love
                                    </a>
                                    <a class="medium genre" href="#">
                                        Pop
                                    </a>
                                    <ul>
                                        <li>
                                            <span class="bold">Artists:</span>
                                            <a href="author_open.html">Pellentesque tincidunt</a>
                                        </li>
                                        <li>
                                            <span class="medium">Release date:</span>
                                            <span>February 24, 2015</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <img src="img/albums/5.jpg" alt="album">
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="dim">
                            <div class="cover">
                                <div class="data">
                                    <a class="bold name" href="#">
                                        Creative Commons Vol. 2
                                    </a>
                                    <a class="medium genre" href="#">
                                        Electronic
                                    </a>
                                    <ul>
                                        <li>
                                            <span class="medium">Artists:</span>
                                            <a href="author_open.html">Pellentesque tincidunt</a>
                                        </li>
                                        <li>
                                            <span class="medium">Release date:</span>
                                            <span>June 28, 2015</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <img src="img/albums/6.jpg" alt="album">
                    </div>
                </div>

                <!-- / album slider -->

            </div>

            <!-- ######################### /HOME PLAYER & ALBUMS ######################### -->

            <div class="clearfix"></div>

            <!-- ######################### MAIN CONTENT ######################### -->

            <div class="three-fourth main-content-wrapp">

                <!-- title -->
                <div class="title">
                    <h2><strong>Recent</strong> news</h2>
                    <div class="detail"></div>
                    <a href="news_list.html" class="semibold">view more</a>
                </div>

                <!-- news -->

                <ul class="news-entry">
                    <!-- entry -->
                    <li>
                        <article>
                            <!-- img -->
                            <div class="one-third">
                                <div class="wrapp">
                                    <img src="img/news/1.jpg" alt="img">
                                    <div class="detail"></div>
                                </div>
                                <span class="icon small style-1">&#xf02d;</span>
                                <a href="#">albums</a>
                            </div>
                            <!-- content -->
                            <div class="two-third last">
                                <!-- title -->
                                <h4>
                                    <a href="news_open.html">New hot album release</a>
                                </h4>
                                <!-- date -->
                                <div class="date">
                                    <span class="icon small style-1">&#xf017;</span><span>June 24, 2015 at 15:35 AM</span>
                                </div>
                                <!-- txt -->
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium neque eu
                                    facilisis porttitor. Proin vel dignissim justo. Donec condimentum commodo neque,
                                    quis ultrices nunc tempus vel. Proin euismod, arcu nec lacinia convallis, purus
                                    ligula suscipit risus...
                                </p>
                                <!-- link -->
                                <a href="news_open.html" class="button small style-1">
                                    read more
                                    <span class="detail"></span>
                                </a>
                            </div>
                        </article>
                    </li>
                    <!-- entry -->
                    <li>
                        <article>
                            <!-- img -->
                            <div class="one-third">
                                <div class="wrapp">
                                    <img src="img/news/2.jpg" alt="img">
                                    <div class="detail"></div>
                                </div>
                                <span class="icon small style-1">&#xf02d;</span>
                                <a href="#">interviews</a>
                            </div>
                            <!-- content -->
                            <div class="two-third last">
                                <!-- title -->
                                <h4>
                                    <a href="news_open.html">Artist interview, first look at new album</a>
                                </h4>
                                <!-- date -->
                                <div class="date">
                                    <span class="icon small style-1">&#xf017;</span><span>June 18, 2015 at 8:15 AM</span>
                                </div>
                                <!-- txt -->
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium neque eu
                                    facilisis porttitor. Proin vel dignissim justo. Donec condimentum commodo neque,
                                    quis ultrices nunc tempus vel. Proin euismod, arcu nec lacinia convallis, purus
                                    ligula suscipit risus...
                                </p>
                                <!-- link -->
                                <a href="news_open.html" class="button small style-1">
                                    read more
                                    <span class="detail"></span>
                                </a>
                            </div>
                        </article>
                    </li>
                    <!-- entry -->
                    <li>
                        <article>
                            <!-- img -->
                            <div class="one-third">
                                <div class="wrapp">
                                    <img src="img/news/3.jpg" alt="img">
                                    <div class="detail"></div>
                                </div>
                                <span class="icon small style-1">&#xf02d;</span>
                                <a href="#">music</a>
                            </div>
                            <!-- content -->
                            <div class="two-third last">
                                <!-- title -->
                                <h4>
                                    <a href="news_open.html">Country song</a>
                                </h4>
                                <!-- date -->
                                <div class="date">
                                    <span class="icon small style-1">&#xf017;</span><span>June 14, 2015 at 11:53 AM</span>
                                </div>
                                <!-- txt -->
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium neque eu
                                    facilisis porttitor. Proin vel dignissim justo. Donec condimentum commodo neque,
                                    quis ultrices nunc tempus vel. Proin euismod, arcu nec lacinia convallis, purus
                                    ligula suscipit risus...
                                </p>
                                <!-- link -->
                                <a href="news_open.html" class="button small style-1">
                                    read more
                                    <span class="detail"></span>
                                </a>
                            </div>
                        </article>
                    </li>
                    <!-- entry -->
                    <li>
                        <article>
                            <!-- img -->
                            <div class="one-third">
                                <div class="wrapp">
                                    <img src="img/news/4.jpg" alt="img">
                                    <div class="detail"></div>
                                </div>
                                <span class="icon small style-1">&#xf02d;</span>
                                <a href="#">events</a>
                            </div>
                            <!-- content -->
                            <div class="two-third last">
                                <!-- title -->
                                <h4>
                                    <a href="news_open.html">Pedal to the metal</a>
                                </h4>
                                <!-- date -->
                                <div class="date">
                                    <span class="icon small style-1">&#xf017;</span><span>June 12, 2015 at 5:15 AM</span>
                                </div>
                                <!-- txt -->
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium neque eu
                                    facilisis porttitor. Proin vel dignissim justo. Donec condimentum commodo neque,
                                    quis ultrices nunc tempus vel. Proin euismod, arcu nec lacinia convallis, purus
                                    ligula suscipit risus...
                                </p>
                                <!-- link -->
                                <a href="news_open.html" class="button small style-1">
                                    read more
                                    <span class="detail"></span>
                                </a>
                            </div>
                        </article>
                    </li>
                </ul>

                <!-- /news -->

                <!-- title -->
                <div class="title">
                    <h2><strong>Great</strong> authors</h2>
                    <div class="detail"></div>
                    <a href="author_list.html" class="semibold">view more</a>
                </div>

                <!-- great authors -->

                <div class="great-authors">
                    <!-- author -->
                    <div class="one-third">
                        <div class="wrapp">
                            <!-- img -->
                            <img src="img/authors/1.jpg" alt="author">
                            <div class="detail"></div>
                            <!-- link -->
                            <a href="author_open.html" class="button small style-1">
                                view profile
                                <span class="detail"></span>
                            </a>
                        </div>
                        <!-- title -->
                        <h5>
                            <a href="author_open.html">Peggy Olson</a>
                        </h5>
                        <span class="tracks">28 tracks</span>
                        <!-- txt -->
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium neque eu facilisis
                            porttitor.
                        </p>
                    </div>
                    <!-- author -->
                    <div class="one-third">
                        <div class="wrapp">
                            <!-- img -->
                            <img src="img/authors/2.jpg" alt="author">
                            <div class="detail"></div>
                            <!-- link -->
                            <a href="author_open.html" class="button small style-1">
                                view profile
                                <span class="detail"></span>
                            </a>
                        </div>
                        <!-- title -->
                        <h5>
                            <a href="author_open.html">Barney Stinson</a>
                        </h5>
                        <span class="tracks">326 tracks</span>
                        <!-- txt -->
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium neque eu facilisis
                            porttitor.
                        </p>
                    </div>
                    <!-- author -->
                    <div class="one-third last">
                        <div class="wrapp">
                            <!-- img -->
                            <img src="img/authors/3.jpg" alt="author">
                            <div class="detail"></div>
                            <!-- link -->
                            <a href="author_open.html" class="button small style-1">
                                view profile
                                <span class="detail"></span>
                            </a>
                        </div>
                        <!-- title -->
                        <h5>
                            <a href="author_open.html">Lady Mae Loxley</a>
                        </h5>
                        <span class="tracks">145 tracks</span>
                        <!-- txt -->
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium neque eu facilisis
                            porttitor.
                        </p>
                    </div>
                </div>

                <!-- /great authors -->

            </div>

            <!-- ######################### /MAIN CONTENT ######################### -->

            <!-- ######################### SIDEBAR ######################### -->

            <div class="one-fourth last sidebar-wrapp">

                <!-- title -->
                <div class="title">
                    <h2><strong>Coming</strong> events</h2>
                    <div class="detail"></div>
                </div>

                <!-- comming events -->

                <ul class="comming-events">
                    <!-- entry -->
                    <li>
                        <!-- title -->
                        <h5>
                            <a href="#">Welcome to the jungle</a>
                        </h5>
                        <!-- date -->
                        <div class="one-fourth">
                            <span class="day">28</span>
                            <span class="month">June</span>
                        </div>
                        <!-- details -->
                        <div class="three-fourth last">
                            <ul>
                                <li><span class="icon small style-1">&#xf017;</span><span>09:00 PM - 03:00 AM</span>
                                </li>
                                <li>
                                    <span class="icon small style-1">&#xf124;</span><span>215 South Madison Avenue</span>
                                </li>
                            </ul>
                        </div>
                        <!-- link -->
                        <a href="#" class="button small style-2">
                            sold out
                            <span class="detail"></span>
                        </a>
                    </li>
                    <!-- entry -->
                    <li>
                        <!-- title -->
                        <h5>
                            <a href="#">Bass attack mixtape</a>
                        </h5>
                        <!-- date -->
                        <div class="one-fourth">
                            <span class="day">03</span>
                            <span class="month">July</span>
                        </div>
                        <!-- details -->
                        <div class="three-fourth last">
                            <ul>
                                <li><span class="icon small style-1">&#xf017;</span><span>08:00 PM - 12:00 PM</span>
                                </li>
                                <li>
                                    <span class="icon small style-1">&#xf124;</span><span>215 South Madison Avenue</span>
                                </li>
                            </ul>
                        </div>
                        <!-- link -->
                        <a href="#" class="button small style-3">
                            buy tickets
                            <span class="detail"></span>
                        </a>
                    </li>
                    <!-- entry -->
                    <li>
                        <!-- title -->
                        <h5>
                            <a href="#">Summer festival</a>
                        </h5>
                        <!-- date -->
                        <div class="one-fourth">
                            <span class="day">15</span>
                            <span class="month">July</span>
                        </div>
                        <!-- details -->
                        <div class="three-fourth last">
                            <ul>
                                <li><span class="icon small style-1">&#xf017;</span><span>23:00 PM - 08:00 AM</span>
                                </li>
                                <li>
                                    <span class="icon small style-1">&#xf124;</span><span>215 South Madison Avenue</span>
                                </li>
                            </ul>
                        </div>
                        <!-- link -->
                        <a href="#" class="button small style-3">
                            buy tickets
                            <span class="detail"></span>
                        </a>
                    </li>
                </ul>

                <!-- /comming events -->

                <!-- title -->
                <div class="title">
                    <h2><strong>Soundcloud</strong> music</h2>
                    <div class="detail"></div>
                </div>

                <!-- soundcloud widget -->

                <iframe class="soundcloud-widget"
                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/136949481&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

                <!-- /soundcloud widget -->

                <!-- title -->
                <div class="title">
                    <h2><strong>Recent</strong> videos</h2>
                    <div class="detail"></div>
                </div>

                <!-- video slider -->

                <div class="video-slider content-slider">
                    <div class="item">
                        <iframe class="youtube-widget" src="https://www.youtube.com/embed/rYXJONBXrNI"
                                allowfullscreen></iframe>
                        <!-- title -->
                        <h5>
                            <a href="#">Electro House 2014 Dance Mix #89</a>
                        </h5>
                        <span class="icon small style-1">&#xf017;</span><span>June 12, 2015 at 5:15 AM</span>
                    </div>
                    <div class="item">
                        <iframe class="youtube-widget" src="https://www.youtube.com/embed/1yFckcl076M"
                                allowfullscreen></iframe>
                        <!-- title -->
                        <h5>
                            <a href="#">New EDM Music 2015 - Best Of Electro House Mixed By DJ Styline</a>
                        </h5>
                        <span class="icon small style-1">&#xf017;</span><span>June 05, 2015 at 3:18 AM</span>
                    </div>
                    <div class="item">
                        <iframe class="youtube-widget" src="https://www.youtube.com/embed/3cnUHHdtfjo"
                                allowfullscreen></iframe>
                        <!-- title -->
                        <h5>
                            <a href="#">New Electro & House 2014 Progressive Summer Mix</a>
                        </h5>
                        <span class="icon small style-1">&#xf017;</span><span>June 05, 2015 at 5:10 AM</span>
                    </div>
                </div>

                <!-- /video slider -->

            </div>

            <!-- ######################### /SIDEBAR ######################### -->

        </div>

        <!-- /main content -->

        <div class="clearfix"></div>

        <!-- before footer -->

        <div class="before-footer">
            <div class="center">
                <div class="three-fourth">
                    <!-- title -->
                    <div class="title">
                        <h2><strong>Latest from</strong> the blog</h2>
                        <div class="detail"></div>
                        <a href="blog_open.html" class="semibold">view more</a>
                    </div>
                    <!-- latest blog -->
                    <div class="latest-blog">
                        <!-- post -->
                        <div class="one-third">
                            <div class="wrapp">
                                <!-- img -->
                                <img src="img/latest-posts/1.jpg" alt="post">
                                <div class="detail"></div>
                            </div>
                            <!-- date -->
                            <span class="icon small style-1">&#xf017;</span><span
                                    class="date">June 25, 2015 at 1:44 AM</span>
                            <!-- title -->
                            <h5>
                                <a href="blog_open.html">Who we are?</a>
                            </h5>
                            <!-- txt -->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium neque eu
                                facilisis porttitor. Proin vel dignissim justo. Donec condimentum commodo neque, quis
                                ultrices nunc tempus vel....
                            </p>
                            <!-- link -->
                            <a href="blog_open.html" class="button small style-1">
                                read more
                                <span class="detail"></span>
                            </a>
                        </div>
                        <!-- post -->
                        <div class="one-third">
                            <div class="wrapp">
                                <!-- img -->
                                <img src="img/latest-posts/2.jpg" alt="post">
                                <div class="detail"></div>
                            </div>
                            <!-- date -->
                            <span class="icon small style-1">&#xf017;</span><span
                                    class="date">June 13, 2015 at 11:34 AM</span>
                            <!-- title -->
                            <h5>
                                <a href="blog_open.html">Vote for us</a>
                            </h5>
                            <!-- txt -->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium neque eu
                                facilisis porttitor. Proin vel dignissim justo. Donec condimentum commodo neque, quis
                                ultrices nunc tempus vel....
                            </p>
                            <!-- link -->
                            <a href="#" class="button small style-1">
                                read more
                                <span class="detail"></span>
                            </a>
                        </div>
                        <!-- post -->
                        <div class="one-third last">
                            <div class="wrapp">
                                <!-- img -->
                                <img src="img/latest-posts/3.jpg" alt="post">
                                <div class="detail"></div>
                            </div>
                            <!-- date -->
                            <span class="icon small style-1">&#xf017;</span><span
                                    class="date">June 05, 2015 at 3:18 AM</span>
                            <!-- title -->
                            <h5>
                                <a href="blog_open.html">Our store is open!</a>
                            </h5>
                            <!-- txt -->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium neque eu
                                facilisis porttitor. Proin vel dignissim justo. Donec condimentum commodo neque, quis
                                ultrices nunc tempus vel....
                            </p>
                            <!-- link -->
                            <a href="blog_open.html" class="button small style-1">
                                read more
                                <span class="detail"></span>
                            </a>
                        </div>
                    </div>
                    <!-- latest blog -->
                </div>
                <div class="one-fourth last">
                    <!-- title -->
                    <div class="title">
                        <h2><strong>Newest</strong> photos</h2>
                        <div class="detail"></div>
                    </div>
                    <!-- newest photos -->
                    <div class="newest-photos-slider content-slider">
                        <div class="item">
                            <ul>
                                <li>
                                    <div class="date style-1"><span class="day">18</span><span class="month">June</span>
                                    </div>
                                </li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/1.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/2.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/3.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/4.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/5.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/6.jpg" alt="img"></a></li>
                                <li>
                                    <div class="date style-2"><span class="day">14</span><span class="month">June</span>
                                    </div>
                                </li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/7.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/8.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/9.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/10.jpg" alt="img"></a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/11.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/12.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/13.jpg" alt="img"></a></li>
                                <li>
                                    <div class="date style-1"><span class="day">11</span><span class="month">June</span>
                                    </div>
                                </li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/14.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/15.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/16.jpg" alt="img"></a></li>
                                <li>
                                    <div class="date style-2"><span class="day">07</span><span class="month">June</span>
                                    </div>
                                </li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/17.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/18.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/19.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/20.jpg" alt="img"></a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/21.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/22.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/23.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/24.jpg" alt="img"></a></li>
                                <li>
                                    <div class="date style-1"><span class="day">05</span><span class="month">June</span>
                                    </div>
                                </li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/25.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/26.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/27.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/28.jpg" alt="img"></a></li>
                                <li>
                                    <div class="date style-2"><span class="day">02</span><span class="month">June</span>
                                    </div>
                                </li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/29.jpg" alt="img"></a></li>
                                <li><a href="gallery_open.html"><img src="img/newest-photos/30.jpg" alt="img"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /newest photos -->
                </div>
            </div>
            <div class="cover"></div>
        </div>

        <!-- /before footer -->

        <div class="clearfix"></div>

        <!-- footer -->

        <footer>
            <div class="center">
                <div class="one-fourth widget-area"> <!-- if you need less change for one-third or one-half -->
                    <!-- title -->
                    <div class="title">
                        <h2><strong>About</strong> us</h2>
                        <div class="detail"></div>
                    </div>
                    <!-- widget -->
                    <p>
                        Vivamus hendrerit urna non sem maximus, ac consectetur erat rutrum. Aenean semper felis sed elit
                        eleifend, vitae commodo nunc laoreet. Maecenas dolor sapien, ullamcorper ut turpis non.
                    </p>
                    <div class="about-widget">
                        <!-- small logo -->
                        <img src="img/logo-icon.png" alt="img">
                        <!-- contact details -->
                        <ul>
                            <li><span>E-mail:</span> contact@gozawi.com</li>
                            <li><span>Phone:</span> +48 555 XXX 054</li>
                        </ul>
                    </div>
                </div>
                <div class="one-fourth widget-area">
                    <!-- title -->
                    <div class="title">
                        <h2><strong>Explore</strong> more</h2>
                        <div class="detail"></div>
                    </div>
                    <!-- menu -->
                    <ul class="menu-widget">
                        <li><a href="#">Other demos</a></li>
                        <li><a href="#">Shortcodes</a></li>
                        <li><a href="#">Shopping area</a></li>
                        <li><a href="#">Albums</a></li>
                        <li><a href="#">Buy it!</a></li>
                    </ul>
                </div>
                <div class="one-fourth widget-area">
                    <!-- title -->
                    <div class="title">
                        <h2><strong>Tag</strong> cloud</h2>
                        <div class="detail"></div>
                    </div>
                    <!-- tag cloud -->
                    <ul class="tag-widget">
                        <li><a class="button small style-1" href="#">Hip-Hop</a></li>
                        <li><a class="button small style-1" href="#">Holiday events 2015</a></li>
                        <li><a class="button small style-1" href="#">Song of the month</a></li>
                        <li><a class="button small style-1" href="#">Techno</a></li>
                        <li><a class="button small style-1" href="#">Blog</a></li>
                        <li><a class="button small style-1" href="#">Spoken</a></li>
                        <li><a class="button small style-1" href="#">Electronic</a></li>
                        <li><a class="button small style-1" href="#">Progressive</a></li>
                        <li><a class="button small style-1" href="#">Music</a></li>
                        <li><a class="button small style-1" href="#">Albums</a></li>
                    </ul>
                </div>
                <div class="one-fourth last widget-area">
                    <!-- title -->
                    <div class="title">
                        <h2><strong>Featured</strong> posts</h2>
                        <div class="detail"></div>
                    </div>
                    <!-- featured posts -->
                    <ul class="featured-posts-widget">
                        <!-- post -->
                        <li>
                            <!-- img -->
                            <img src="img/featured/1.png" alt="post">
                            <!-- title -->
                            <h6>
                                <a href="#">TOP 10 songs June 2015</a>
                            </h6>
                            <span class="icon small style-1">&#xf017;</span><span>June 14, 2015 at 3:18 AM</span>
                        </li>
                        <!-- post -->
                        <li>
                            <!-- img -->
                            <img src="img/featured/2.png" alt="post">
                            <!-- title -->
                            <h6>
                                <a href="#">Summer update</a>
                            </h6>
                            <span class="icon small style-1">&#xf017;</span><span>June 05, 2015 at 8:32 AM</span>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <!-- /footer -->

        <div class="clearfix"></div>

        <!-- copyright -->

        <div class="copyright">
            <div class="center">

                <!-- txt -->

                <span><strong>Copyright 2015.</strong> Design & code by wtxinc for Themeforest.net, Photos used in demo by: <a
                            target="_blank"
                            href="https://www.flickr.com/photos/markjsebastian/">Mark Sebastian</a></span>

                <!-- /txt -->

                <!-- social -->

                <ul class="social">
                    <li><a href="#"><span>&#xf082;</span></a></li>
                    <li><a href="#"><span>&#xf099;</span></a></li>
                    <li><a href="#"><span>&#xf16a;</span></a></li>
                    <li><a href="#"><span>&#xf0e1;</span></a></li>
                </ul>

                <!-- /social -->

            </div>
        </div>

        <!-- /copyright -->

    </div>    <!-- Shifter for mobile version -->
@endsection