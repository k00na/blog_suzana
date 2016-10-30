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

                    {{ Form::open(array('route'=>'contact.send', 'method'=>'POST', 'class'=>'contactForm'))}}

                        <div class="col-lg-6">
                        {{ Form::label('name', 'Ime:')}}
                        {{ Form::text('name', null, array('class'=>'required',  'maxlength'=>"255"))}}
                        </div>

                        <div class="col-lg-6">
                        {{ Form::label('email', 'Email naslov:')}}
                        {{ Form::email('email', null, array('class'=>'required', 'required'=>'', 'maxlength'=>"255")) }}
                        </div>
                        <div class="col-lg-12">
                        {{ Form::label('subject', 'Zadeva:')}}
                        {{ Form::text('subject', null, array('class'=>'form-control required', 'required'=>'', 'maxlength'=>"255"))}}
                        </div>
                        <div class="col-lg-12">
                        {{ Form::label('body', 'Vsebina:')}}
                        {{ Form::textarea('body', null, array('class'=>'form-control required', 'required'=>''))}}
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="commentSubmit" id="con_submit">Pošlji sporočilo</button>
                        </div>   
                        
                    {{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="paginations">

</section>
       


@endsection

