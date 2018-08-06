@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">
			Create a new post
		</div>

		<div class="card-body">
			<form action="{{ url('/post/store') }}" method="post">
				@csrf
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control">
				</div>

				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" name="featured" class="form-control">
				</div>

				<div class="form-group">
					<label for="content">Content</label>
					<textarea class="form-control" name="content" cols="5" rows="5"></textarea>
				</div>

				<div class="form-group">
					<div class="text-center">
						<input type="submit" value="Store post" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
@stop