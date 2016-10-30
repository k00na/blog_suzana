@extends('admin.admin_panel')

@section('title', 'Edit Post')

@section('additional_stylesheets')
	{!! Html::style('css/parsley.css') !!}
	{!! Html::style('css/select2.min.css')!!}
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

	<script type="text/javascript">
		tinymce.init({
			selector: 'textarea',
			plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
			codesample_languages: [
		        {text: 'HTML/XML', value: 'markup'},
		        {text: 'JavaScript', value: 'javascript'},
		        {text: 'CSS', value: 'css'},
		        {text: 'PHP', value: 'php'},
		        {text: 'Ruby', value: 'ruby'},
		        {text: 'Python', value: 'python'},
		        {text: 'Java', value: 'java'},
		        {text: 'C', value: 'c'},
		        {text: 'C#', value: 'csharp'},
		        {text: 'C++', value: 'cpp'}
		    ],

		});
	</script>
@endsection

@section('content')

	<div class="row">
		
		<div class="col-md-10 col-offset-md-10">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Edit Post</strong>

			</div>

			<div class="panel-body">
				<div class="form-group">
				{!! Form::model($post, array('route'=>array('posts.update', $post->id), 'method'=>'PUT', 'files' => true)) !!}
					{{ Form::label('title', 'Title:')}}
					{{ Form::text('title', null, array('class'=>'form-control input-lg'))}}

					{{ Form::label('slug', 'Slug:')}}
					{{ Form::text('slug', null, array('class'=>'form-control input-lg'))}}

					{{ Form::label('category_id', 'Select category:')}}
					{{ Form::select('category_id', $categories, $post->category_id, ['class'=>'form-control'])}}

					{{ Form::label('tags', 'Tags')}}
					{{ Form::select('tags[]', $tags, $postags, ['class'=>'form-control select2-multi' ,'multiple'=>'multiple'])}}

					{{ Form::label('body', 'Post body:', array('class'=>'form-spacing-top'))}}
					{{ Form::textarea('body', null, array('class'=>'form-control'))}}

					{{ Form::label('featured_image', 'Upload Featured Image')}}
					{{ Form::file('featured_image')}}

					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							
								
								{{ Form::submit('Save', array('class'=>'btn btn-primary col-md-4 col-md-offset-2 btn-marg')) }}

								<a href="{{route('posts.index')}}" class="btn btn-danger col-md-4 btn-marg">Cancel</a>
							
						</div>
					</div>
				{!! Form::close() !!}
				</div>
			</div>
		</div>
			

			
		</div>
		
	</div>

@endsection

@section('additional_scripts')
	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({{ json_encode($post->tags()->getRelatedIds()) }}).trigger('change');
		
	</script>


@endsection

