@extends('admin.layout')
@section('title', $title ?? '')
@section('content')

    @if( isset( $message ) )
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <div class="row" id="EditBrandForm">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h3 class="card-title mb-1">ویرایش برند</h3>
                    </div>
                    <form  action="{{ route('admin.brand.update', ['brand'=> $brand]) }}" method="post" class="form-group">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="mg-b-10">اسم برند</p>
                                    <input type="text" class="form-control @error('title')is-invalid @enderror" name="title" placeholder="Title" value="{{ $brand->title }}">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >نام کشور</label>

                                    <select name="country_id" class="form-control">
                                        @foreach( \App\Country::get() as $country )

                                            <option value="{{$country->id}}">{{$country->title}}</option>
                                        @endforeach

                                    </select>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="mg-b-10">عنوان url</p>
                                    <input type="text" class="form-control @error('slug')is-invalid @enderror" name="slug" placeholder="Slug" value="{{ ( old('slug') && old('slug') != $brand->slug )?old('slug'):$brand->slug }}">
                                    @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p class="mg-b-10">آپلود عکس</p>
                                <input type="file" name="file" />
                                @error('file')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
