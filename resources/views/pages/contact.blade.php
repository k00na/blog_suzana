@extends('main')

@section('title', ' - Kontakt')

@section('content')


<section class="mainContent">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider noMarginBottom">
                    <img src="images/author/author_01.jpg" alt="">
                </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="widgetTitle text-capitalize">Pišite mi</h3>
                    </div>
                </div>

                    <div class="row">
                        <form action="#" method="get" class="contactForm" id="contactForm">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Ime*" id="con_name" name="con_name" class="required">
                            </div>
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="col-lg-6">
                                <input type="email" placeholder="Email naslov*" id="con_email" name="con_email" class="required">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" placeholder="Tema" id="con_sub" class="required">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Vprašanje" id="message" name="con_message" class="required"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="commentSubmit" id="con_submit">Pošlji sporočilo</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                
            </div>
        </div>
    </div>
</section>
<section class="paginations">

</section>
       


@endsection

