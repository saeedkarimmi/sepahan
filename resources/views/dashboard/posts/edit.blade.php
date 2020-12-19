@extends('dashboard.layout')
@section('title', $title)
@section('content')

@if( isset( $message ) )
	<div class="alert alert-success">{{ $message }}</div>
@endif

<div class="row" id="EditPostForm">
	<div class="col-lg-12 col-md-12">
		<div class="card custom-card">
			<div class="card-body">
				<div>
					<h3 class="card-title mb-1">ویرایش خبر</h3>
				</div>
				<form  action="{{ route('post-edit-post', ['id'=> $currentPost->id]) }}" method="post" class="form-group">
                @csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<p class="mg-b-10">عنوان خبر</p>
							<input type="text" class="form-control @error('title')is-invalid @enderror" name="title" placeholder="Title" value="{{ ( old('title') && old('title') != $currentPost->title )?old('title'):$currentPost->title }}">
							@error('title')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>
						
					</div>
					<div class="col-md-6">
						<div class="form-group">
								<p class="mg-b-10">عنوان url</p>
								<input type="text" class="form-control @error('slug')is-invalid @enderror" name="slug" placeholder="Slug" value="{{ ( old('slug') && old('slug') != $currentPost->slug )?old('slug'):$currentPost->slug }}">
								@error('slug')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>
					
					</div>
                </div>
                <div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="form-group">
						    <p class="mg-b-10">مشخصات صفحه</p>
						    <textarea class="form-control editor @error('description')is-invalid @enderror" id="description" name="description">{{ ( old('description') && old('description') != $currentPost->description )?old('description'):$currentPost->description }}</textarea>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-main-primary">بروزرسانی  </button>
					<button type="reset" class="btn btn-warning">پاک کردن اظلاعات</button>
				</form>

			</div>
		</div>
	</div>
</div>
@stop