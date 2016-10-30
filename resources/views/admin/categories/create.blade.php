@extends('admin.admin_panel')

@section('additional_stylesheets')
	{{ Html::style('css/parsley.css') }}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Create A New Category</h2>
			</div>

			<div class="panel-body">
				<div class="form-group">
					{{ Form::open(array('route'=>'categories.store','method'=>'POST','data-parsley-validate' => '',)) }}
				
						{{ Form::label('name', 'Name')}}
						{{ Form::text('name', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>"255"))}}

						{{ Form::submit('Create Category', array('class'=>'btn btn-primary form-btn-marg')) }}
					{{ Form::close() }}
				</div>	
			</div>

		</div>
			
		</div>
	</div>

@section('additional_scripts')
	{{ Html::script('js/parsley.min.js') }}
@endsection

@endsection