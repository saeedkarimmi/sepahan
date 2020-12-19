@extends('admin.layout')
@section('title', $title ?? '')
@section('content')



    <div class="row" id="AddPostForm">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h3 class="card-title mb-1">افزودن خبر</h3>
                    </div>
                    <form  action="{{ route('admin.news.store') }}" enctype="multipart/form-data" method="post" class="form-group">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="mg-b-10">عنوان خبر</p>
                                    <input type="text" class="form-control @error('title')is-invalid @enderror" name="title" placeholder="Title" value="{{ old('title') }}">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="mg-b-10">عنوان url</p>
                                    <input type="text" class="form-control @error('slug')is-invalid @enderror" name="slug" placeholder="Slug" value="{{ old('slug') }}">
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
                                    <p class="mg-b-10">چکیده خبر</p>
                                    <input type="text" class="form-control @error('title')is-invalid @enderror" name="description_short" placeholder="description_short" value="{{ old('description_short') }}">
                                    @error('description_short')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <p class="mg-b-10">مشخصات صفحه</p>
                                    <textarea class="form-control editor @error('description')is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-main-primary">ایجاد خبر</button>
                        <button type="reset" class="btn btn-warning">پاک کردن اطلاعات</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
