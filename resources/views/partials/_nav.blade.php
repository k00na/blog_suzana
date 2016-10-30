<div class="leftMenu">
                <div class="leftmenuHead">
                    <div class="logoleft pull-left">
                        <a href="#"><img src="images/logoleft.png" alt=""></a>
                    </div>
                    <a href="#" class="leftclose pull-right">x</a>
                    <div class="clearfix"></div>
                </div>
                <div class="leftmenuScroll">
                    <nav class="leftmainnav">
                        <ul>
                            <li><a href="{{route('home')}}">Domov</a></li>
                            <li class="has-menu-items"><a href="{{route('posts')}}">Objave</a>
                                <ul class="sub-menu">
                                    <li><a href="blog_kategorija.html">Kategorije</a></li>
                                    <li><a href="arhiv.html">Arhiv</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('about')}}">O meni</a>
                            </li>
                            <li><a href="{{route('contact')}}">Kontakt</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="socialleft">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
            <!--Header Top Start -->
            <section class="headerTop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-xs-2">
                            <div class="menuBar" id="leftTrigger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-8 text-center">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-2 text-right">
                            <div class="search">
                                <a href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                                <form action="#" method="post" class="searchForm">
                                    <input type="search" placeholder="Search...">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Header Top End -->
            <!--Header Start-->
            <header class="header">
                <div class="container">
                    <div class="headerIn">
                        <div class="row">
                            <div class="col-lg-8 col-sm-9 col-xs-12 pull-left noPaddingRight">
                                <nav class="mainNav">
                                    <div class="menuBar hidden-lg hidden-md">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <ul>
                                        <li class="has-menu-items"><a href="{{route('home')}}">Domov</a></li>
                                        <li class="has-menu-items"><a href="{{route('posts')}}">Objave</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog_kategorija.html">Kategorije</a></li>
                                                <li><a href="arhiv.html">Arhiv</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-menu-items"><a href="{{route('about')}}">O meni</a>
                                        </li>
                    <li class="has-menu-items"><a href="{{route('contact')}}">Kontakt</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-4 col-sm-3 col-xs-8 pull-right text-right">
                                <div class="socialHeader">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    @if(Auth::check())
                                        <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i></a>
                                    @endif
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!--Header End-->