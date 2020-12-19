@extends('admin.layout')
@section('title', $title ?? '')
@section('content')

    <div class="col-md-12">
        <div class="card custom-card">
            <div class="card-body">
                {{--                @if( isset( $message ) )--}}
                {{--                    <div class="alert alert-success">{{ $message }}</div>--}}
                {{--                @endif--}}

                <div id="AddCountry">
                    <h6 class="card-title mb-1"> ویرایش دسته بندی</h6>
                    <form  action="{{ route('admin.category.update' , $category->id) }}" method="post" class="form-group">
                        @csrf
                        @method('patch')
                        <p class="mg-b-10">نام دسته بندی</p>
                        <input type="text" class="form-control @error('title')is-invalid @enderror" name="title"   placeholder="title" value="{{ $category->title}}">

                        <br>

                        <select name="category_id" id="selected" class="w-50">
                            <option value="">ندارد</option>
                            @foreach ($categories as $parentCategory)
                                <option value="{{$parentCategory->id}}" @if($parentCategory->id == $category->category_id) selected @endif>{{$parentCategory->title}}</option>
                            @endforeach
                        </select>

                        <br>
                        <br>
                        <button type="submit" class="btn btn-main-primary">افزودن  دسته بندی</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
