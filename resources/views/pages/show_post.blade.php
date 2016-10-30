@extends('main')

@section('title', ' Naslov')

@section('content')
	<section class="mainContent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider noMarginBottom" style="text-align: center">
                        <img src="{{ asset('images/' . $post->image) }}" alt="" >
                    </div>
                    <div class="gellarypostCont">
                        {{-- TITLE --}}
                        <h3 class="blogtitle gellary">
                            {{$post->title}}
                        </h3>
                        {{-- CONTENT --}}
                        {!! $post->body !!}
                        
                    </div>
                    {{-- POST DATA --}}
                    <div class="blogMeta gfullwidth">
                        <a href="#"><i class="fa fa-user"></i>{{$post->category->name}}</a>                         
                        <a href="#"> <i class="fa fa-clock-o"></i>{{ date('F d, Y', strtotime($post->created_at)) }}</a>
                        <a href="#"><i class="fa fa-comments"></i>6 Comments</a>
                    </div>
                    
                </div>
                <div class="col-lg-12">
                    <h3 class="widgetTitle text-capitalize">Post Comments</h3>
                    <ol class="commentList">
                        <li>
                            <div class="singleComments">
                                <img src="images/author/1.jpg" alt="">
                                <div class="comHead">
                                    <a class="pull-left authorName" href="#">Jackson Richardson</a>
                                    <a class="pull-right reply" href="#">reply</a>
                                    <div class="clearfix"></div>
                                </div>
                                <h4 class="metaDate">Jan 06, 2016 at 14:35</h4>
                                <p>Nulla consequat elit aliquam mauris molestie fermentum. Nam at tempor massa, mattis vulputate felis. Maecenas est arcu, viverra vitae elit vel, pretium malesuada lectus. Proin ut vulputate ex. </p>
                            </div>
                            <ul class="childCom">
                                <li>
                                    <div class="singleComments">
                                        <img src="images/author/2.jpg" alt="">
                                        <div class="comHead">
                                            <a class="pull-left authorName" href="#">Alberto Brando</a>
                                            <a class="pull-right reply" href="#">reply</a>
                                            <div class="clearfix"></div>
                                        </div>
                                        <h4 class="metaDate">Jan 06, 2016 at 14:35</h4>
                                        <p>Nulla consequat elit aliquam mauris molestie fermentum. Nam at tempor massa, mattis vulputate felis. Maecenas est arcu, viverra vitae elit vel, pretium malesuada lectus. Proin ut vulputate ex. </p>
                                    </div>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <div class="singleComments">
                                <img src="images/author/3.jpg" alt="">
                                <div class="comHead">
                                    <a class="pull-left authorName" href="#">Jessica Richardson</a>
                                    <a class="pull-right reply" href="#">reply</a>
                                    <div class="clearfix"></div>
                                </div>
                                <h4 class="metaDate">Jan 06, 2016 at 14:35</h4>
                                <p>Nulla consequat elit aliquam mauris molestie fermentum. Nam at tempor massa, mattis vulputate felis. Maecenas est arcu, viverra vitae elit vel, pretium malesuada lectus. Proin ut vulputate ex. </p>
                            </div>
                        </li>
                    </ol>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="widgetTitle text-capitalize">Leave a Reply</h3>
                    </div>
                    <form action="#" method="post" class="contactForm">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" placeholder="Subject">
                        </div>
                        <div class="col-lg-12">
                            <textarea placeholder="Message"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="commentSubmit">submit comment</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection