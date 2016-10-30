@extends('admin.admin_panel')

@section('additional_stylesheets')
	{{ Html::style('css/parsley.css') }}
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script> 
@endsection

@section('title', 'Edit About')


@section('content')

<div class="row">
	
	<div class="col-md-10 col-offset-md-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong>Short About</strong>

		</div>

		<div class="panel-body">
		<div class="form-group">
		@if($about)
			
			{!! Form::model($about, array('route'=>array('about.edit', $about->id), 'method'=>'PUT', 'files' => true)) !!}

				{{ Form::label('title', 'First Page About - Title')}}
				{{ Form::text('title', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>"255"))}}

				{{ Form::label('description', 'First Page About - Description')}}
				{{ Form::textarea('description', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>"355"))}}

				@if($about->image)
					<div class="row" style="text-align: center">	
						<img src="{{ asset('images/' . $about->image) }}" width="50%" height="50%"style="margin: 15px">
					</div>

					{{ Form::label('image', 'Change First Page Image')}}
					{{ Form::file('image')}}
				@else
					{{ Form::label('image', 'Add First Page About Image')}}
					{{ Form::file('image')}}
				@endif

				<div class="row">
					<div class="col-md-6 col-md-offset-3">
							
							{{ Form::submit('Save', array('class'=>'btn btn-primary col-md-2 col-md-offset-2 form-btn-marg')) }}

							<a href="{{route('posts.index')}}" class="btn btn-danger col-md-2 btn-marg">Cancel</a>
							{{Form::open(array('route'=>'about.deleteShortAbout', 'method'=>'delete'))}}
							{{ Form::submit('Remove Section', array('class'=>'btn btn-primary col-md-2 col-md-offset-2 form-btn-marg')) }}

							{{Form::close()}}
						
					</div>
				</div>

			{!! Form::close() !!}

		@else 
			<h2>No Short About Info To Edit.</h2>
		@endif
				
				
			</div>
		
			</div>
			
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Long About</strong>
			</div>



			<div class="panel-body">
				@if($secondAbout)
					<div class="form-group">
					
					
					{!! Form::model($secondAbout, array('route'=>array('about.editSecond', $secondAbout->id), 'method'=>'PUT', 'files' => true)) !!}
					
					{{ Form::label('titleSecond', 'Second Page About - Title')}}
					{{ Form::text('titleSecond', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>"255"))}}

					{{ Form::label('descriptionSecond', 'Second Page About - Description:')}}
					{{ Form::textarea('descriptionSecond', null, array('class'=>'form-control', 'rows'=>'10', 'cols'=>'80', 'id'=>'descriptionSecond'))}}

					@if($secondAbout->imageSecond)
						<div class="row" style="text-align: center">	
							<img src="{{ asset('images/' . $secondAbout->imageSecond) }}" width="50%" height="50%" style="margin: 15px">
						</div>

						{{ Form::label('imageSecond', 'Change Second Page Image')}}
						{{ Form::file('imageSecond')}}
					@else
						{{ Form::label('imageSecond', 'Add Second Page About Image')}}
						{{ Form::file('imageSecond')}}
					@endif

					<div class="row">
						<div class="col-md-6 col-md-offset-3">
								
								{{ Form::submit('Save', array('class'=>'btn btn-primary col-md-4 col-md-offset-2 form-btn-marg')) }}

								<a href="{{route('posts.index')}}" class="btn btn-danger col-md-4 btn-marg">Cancel</a>


							
						</div>
					</div>

				{!! Form::close() !!}
			@else 
				<h2>No Long About Info To Edit.</h2>
			@endif

			</div>
			</div>
		</div>
	</div>
		

		
	</div>

@section('additional_scripts')

	{{ Html::script('js/parsley.min.js') }}

	<script>
        CKEDITOR.replace( 'descriptionSecond' );
    </script>

@endsection
	

@endsection
