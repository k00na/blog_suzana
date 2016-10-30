@extends('admin.admin_panel')
@section('title', 'Create Tags')

@section('additional_stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Create A New Tag</h2>
				</div>
				<div class="panel-body">
					<div class="form-group">
						
						{{ Form::open(array('route'=>'tags.store','method'=>'POST', 'data-parsley-validate' => '')) }}

						{{ Form::label('name', 'Enter New Tag Name') }}
						{{ Form::text('name', null, array('class'=>'form-control', 'required'=>'')) }}

						{{ Form::submit('Create Tag', array('class'=>'btn btn-primary form-btn-marg'))}}
					
						{{ Form::close() }}

					</div>
				</div>
			</div>
		</div>
	</div>

@section('additional_scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection

@endsection
