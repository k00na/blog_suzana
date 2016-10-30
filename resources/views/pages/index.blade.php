@extends('main')
@section('title', ' Blog')
@section('content')
	<section class="mainContent">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-7">
                    <div class="row">
                        <div class="col-lg-12 text-center">

                            <div class="slider">

                                @foreach($posts as $post)
                                    <div class="singleSlide">
                                        <img src="{{ asset('images/' . $post->image) }}" alt="">
                                        <div class="silderCont">
                                            <h1>{{$post->title}}</h1>
                                            <div class="metaCont">
                                                <a href="#"><i class="fa fa-user"></i>{{$post->category->name}}</a>                         
                                                <a href="#"> <i class="fa fa-clock-o"></i>{{ date('F d, Y', strtotime($post->created_at)) }}</a>
                                                {{--<a href="#"><i class="fa fa-comments"></i>6 Comments</a>--}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- POSTS --}}
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-lg-6 col-sm-12">
                                <div class="singleBlog">
                                    @if($post->image)
                                        <div class="blogImg">
                                            <img src="{{ asset('images/' . $post->image) }}" alt="">
                                        </div>
                                    @endif
                                    <div class="blogDec">
                                        <h2 class="blogtitle">
                                            <a href="{{route('show_post', $post->slug)}}">{{$post->title}}</a>
                                        </h2>
                                        <p class="long-ass-words">{!! substr(strip_tags($post->body), 0, 300) !!} {{strlen(strip_tags($post->body)) > 200 ? "..." : ""}}</p>
                                        <div class="blogMeta">
                                            <a href=""><i class="fa fa-user"></i>{{$post->category->name}}</a>                         
                                            <a href=""> <i class="fa fa-clock-o"></i>{{ date('F d, Y', strtotime($post->created_at)) }}</a>
                                            @if(Auth::check())
                                                <a href="{{route('posts.edit', $post->id)}}" class="fa fa-edit"><span>Edit Post</span></a>
                                            @endif
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="col-lg-4 col-sm-5">
                    <div class="sidebarBlog">
                        @if($about)
                        <aside class="widget">
                            <h3 class="widgetTitle">O MENI</h3>
                            <div class="aboutMe">
                                @if($about->image)
                                <img src="{{ asset('images/' . $about->image) }}" alt="">
                                @endif
                                <div class="aboutdec">

                                    @if($about->title)
                                    <h4>{{$about->title}}</h4>
                                    @endif

                                    @if($about->description)
                                    <p>{{$about->description}}</p>
                                    @endif
                                </div>
                            </div>
                        </aside>
                        @endif
                        <aside class="widget">
                            <h3 class="widgetTitle">ZADNJE OBJAVE</h3>
                            <div class="recentPost">
                                <div class="singleRecpost">
                                    <img src="images/recentpost/1.jpg" alt="">
                                    <h2 class="recTitle">
                                        <a href="#">Drops of rain could heard hitting the pane which made</a>
                                    </h2>
                                </div>
                                <div class="singleRecpost">
                                    <img src="images/recentpost/2.jpg" alt="">
                                    <h2 class="recTitle">
                                        <a href="#">And it's a funny sort of business to be sitting up there at your desk</a>
                                    </h2>
                                </div>
                                <div class="singleRecpost">
                                    <img src="images/recentpost/3.jpg" alt="">
                                    <h2 class="recTitle">
                                        <a href="#">It was half past six and the hands were quietly moving forwards</a>
                                    </h2>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget emailSub">
                            <h3 class="widgetTitle">Prijavi se na novice</h3>
                            <p>Etiam mollis leo ac diam facilisis, in pretium felis molestie. Quisque non nisi ut lectus</p>
                            <form action="#" method="post" class="subForm" id="subscriptionsforms">
                                <input type="email" placeholder="Vaš email naslov" id="sub_email">
                                <button type="submit" id="subs_submit">Prijava</button>
                            </form>
                        </aside>
                        <aside class="widget emailSub">
                            <h3 class="widgetTitle">KATEGORIJE</h3>
                            <ul>
                                <li><a href="blog_kategorija.html">Antropologija</a></li>
                                <li><a href="blog_kategorija.html">Kultura</a></li>
                                <li><a href="blog_kategorija.html">Politika</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--
    <section class="paginations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="paginationIn">
                        <span class="current">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <span class="dottedPagi">...</span>
                        <a href="#">12</a>
                        <a href="#" class="next"><i class="fa fa-long-arrow-right"></i></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}

    <section class="paginations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="paginationIn">
                        <div class="text-center">
                            {!! $posts->links() !!}

                            <p>Number of all posts: {!! $posts->total()!!}</p>
                            <div class="clearfix"></div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </section>

 @endsection
