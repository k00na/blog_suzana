@extends('admin.admin_panel')

@section('title', ' View')

@section('content')
<div class="row">

	<div class="col-md-8">
		<h1>{{ $post->title}}</h1>
		<p class="lead">{!! $post->body !!}</p>

		<hr>
		<div class="tags">
			@foreach($post->tags as $tag)
				<span class="label label-default">{{ $tag->name}}</span>
			@endforeach
		</div>
		
		{{--
		<div class="backend-comments">
			<h2>Comments: <span>{{count($post->comments)}} total</span> </h2>
			<table class="table">
				<thead>
					<tr>
						<td>Name</td>
						<td>Email</td>
						<td>Comment</td>
						<td class="text-center">Edit Comment</td>
					</tr>
				</thead>
				<tbody>
				@foreach($post->comments as $comment)
					<tr>
						<td class="col-md-1">{{$comment->name}}</td>
						<td class="col-md-2">{{$comment->email}}</td>
						<td>{{$comment->comment}}</td>
						<td class="col-md-2">
							<div class="row">
								<div class="col-md-6">
									<a href="{{route('comments.edit', $comment->id)}}" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-pencil"></span></a>
								</div>								
								<div class="col-md-6">
								
								
									<a href="{{route('comments.delete', $comment->id)}}" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash"></span></a>
								
								</div>	
									
									
								
							</div>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div> --}}

	</div>

	<div class="col-md-4">
		<div class="well">
			{{--
			<dl class="dl-horizontal">
				<label>URL slug: </label>

				<a href="{{route('blog.single', $post->slug)}}">{{route('blog.single', $post->slug)}}</a>
			</dl>--}}

			<dl class="dl-horizontal">
				<label>Category: </label>
				<p>{{$post->category->name}}</p>
			</dl>

			<dl class="dl-horizontal">
				<label>Created at: </label>
				<p>{{$post->created_at->diffForHumans()}}</p>
			</dl>

			<dl class="dl-horizontal">
				<label>Last updated: </label>
				<p>{{$post->updated_at->diffForHumans()}}</p>
			</dl>

			

			<div class="row">
				<div class="col-md-6">
					{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
				</div>

				<div class="col-md-6">
					{!! Form::open(array('route'=>array('posts.destroy', $post->id), 'method'=>'DELETE')) !!}
						{{ Form::submit('Delete Post', ['class' => 'btn btn-danger btn-block']) }}
					{!! Form::close() !!}
					
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">

				<a href="{{route('posts.index')}}" class="btn btn-default btn-block btn-h1-spacing"><span class="glyphicon glyphicon-resize-full"></span>See All Posts</a> 
				
					
				
				</div>
			</div>
		</div>
		
	</div>

</div>


@endsection
