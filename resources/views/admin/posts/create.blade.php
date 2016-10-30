@extends('admin.admin_panel')

@section('title', 'New Post')
@section('additional_stylesheets')
	{!! Html::style('css/parsley.css') !!}
	{!! Html::style('css/select2.min.css')!!}
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script> 

{{--
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
--}}
@endsection

@section('content')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		
		<div class="panel panel-default">
			<div class="panel-heading">Fill up the form</div>
			<div class="panel-body">
				<div class="form-group">
					
					{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)) !!}
					
						{{ Form::label('title', 'Title:')}}
						{{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>"255"))}}

						{{ Form::label('slug', 'Slug:')}}
						{{ Form::text('slug', null, array('class'=>'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'255'))}}

						{{ Form::label('category_id', 'Select category:')}}
						{{ Form::select('category_id', $categories, null, ['class'=>'form-control'])}}

						{{ Form::label('tags', 'Tags')}}				
						{{ Form::select('tags[]', $tags, null, ['class'=>'form-control select2-multi' ,'multiple'=>true])}}

						{{ Form::label('body', 'Post body:')}}
						{{ Form::textarea('body', null, array('class'=>'form-control', 'rows'=>'10', 'cols'=>'80', 'id'=>'body'))}}
								
						{{ Form::label('featured_image', 'Upload Featured Image')}}
						{{ Form::file('featured_image')}}

						{{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top: 20px'))}}

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
	</script>

	<script>
        CKEDITOR.replace( 'body' );
    </script>

	 
	


@endsection