@extends('admin.admin_panel')

@section('additional_stylesheets')
	{{ Html::style('css/parsley.css') }}
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script> 
@endsection

@section('content')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Short About </h2>
			</div>

			<div class="panel-body">

				

				@if(!$about)
				<div class="form-group">
					{{ Form::open(array('route'=>'about.create','method'=>'POST','data-parsley-validate' => '', 'files' => true)) }}
				
						{{ Form::label('title', 'First Page About - Title')}}
						{{ Form::text('title', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>"255"))}}

						{{ Form::label('description', 'First Page About - Description')}}
						{{ Form::textarea('description', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>"355"))}}

						{{ Form::label('image', 'First Page About - Image')}}
						{{ Form::file('image')}}

						{{ Form::submit('Create', array('class'=>'btn btn-primary form-btn-marg')) }}
					{{ Form::close() }}
				</div>
				@else 
					<h3>Short about already created.</h3>
					
						<a href="{{route('about.edit')}}" class="btn btn-primary form-btn-marg">Edit</a>
				@endif

				
	
			</div>

		</div>

		<div class="panel panel-default">
			
			<div class="panel-heading">
				<h2>Long About</h2>
			</div>

			<div class="panel-body">
				@if(!$secondAbout)
				<div class="form-group">
					{{ Form::open(array('route'=>'about.createSecond','method'=>'POST','data-parsley-validate' => '', 'files' => true)) }}

						{{ Form::label('titleSecond', 'Second Page About - Title')}}
						{{ Form::text('titleSecond', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>"255"))}}

						{{ Form::label('descriptionSecond', 'Second Page About - Description:')}}
						{{ Form::textarea('descriptionSecond', null, array('class'=>'form-control', 'rows'=>'10', 'cols'=>'80', 'id'=>'descriptionSecond'))}}

						{{ Form::label('image', 'Second Page About - Image')}}
						{{ Form::file('imageSecond')}}

						{{ Form::submit('Create ', array('class'=>'btn btn-primary form-btn-marg')) }}

					{{ Form::close() }}
					
				</div>
				@else
					<h3>Long about already created.</h3>
					
						<a href="{{route('about.edit')}}" class="btn btn-primary form-btn-marg">Edit</a>
				@endif

				
					

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