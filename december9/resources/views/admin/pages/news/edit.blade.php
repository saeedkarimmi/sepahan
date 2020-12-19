@extends('admin.layout')
@section('title', $title ?? '')
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
                    <form  action="{{ route('admin.news.update', [$post->id]) }}" method="post" class="form-group">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="mg-b-10">عنوان خبر</p>
                                    <input type="text" class="form-control @error('title')is-invalid @enderror" name="title" placeholder="Title" value="{{ ( old('title') && old('title') != $post->title )?old('title'):$post->title }}">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="mg-b-10">عنوان url</p>
                                    <input type="text" class="form-control @error('slug')is-invalid @enderror" name="slug" placeholder="Slug" value="{{ ( old('slug') && old('slug') != $post->slug )?old('slug'):$post->slug }}">
                                    @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p class="mg-b-10">آپلود عکس</p>

                                <input type="file" name="file">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <p class="mg-b-10">مشخصات صفحه</p>
                                    <textarea class="form-control editor @error('description')is-invalid @enderror" id="description" name="description">{{ ( old('description') && old('description') != $post->description )?old('description'):$post->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-main-primary">بروزرسانی  </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
