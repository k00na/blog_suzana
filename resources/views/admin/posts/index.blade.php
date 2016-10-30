@extends('admin.admin_panel')

@section('title', 'All Posts')
@section('content')

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th class="col-md-1">#</th>
				<th class="col-md-2">Title</th>
				<th class="col-md-4">Body</th>
				<th class="col-md-2">Created At</th>
				<th class="col-md-3"></th>
			</thead>

			<tbody>
				
				@foreach($posts as $post)
				<tr>
					<td class="col-md-1">{{$post->id}}</td>
					<td class="col-md-2">{{$post->title}}</td>
					<td class="col-md-4">{!!substr(strip_tags($post->body), 0, 60)!!} {{strlen(strip_tags($post->body)) > 60 ? '...' : ''}}</td>
					<td class="col-md-2">{{$post->created_at->diffForHumans()}}</td>
					<td class="col-md-3">
						<div class="col-md-12">

							<div class="col-md-6">
								{!! Html::linkRoute('posts.show', 'View', array($post->id), array('class'=>'btn btn-primary btn-sm btn-block')) !!}
							</div>

							<div class="col-md-6">
								{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-default btn-sm btn-block')) !!}
							</div>

							
						</div>
					</td>
				</tr>
				@endforeach

			</tbody>
		</table>

		<div class="text-center">
			{!! $posts->links() !!}

			<p>Number of all posts: {!! $posts->total()!!}</p> 
		</div>
	</div>
</div>


@endsection