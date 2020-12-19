


@extends('admin.layout')
@section('title', $title ?? '')
@section('content')

    @if( isset( $message ) )
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <div id="EditCountry">
        <h6 class="card-title mb-1">ویرایش دسته بندی</h6>
        <form  action="{{ route('admin.country.update', ['country'=> $country]) }}" method="post" class="form-group">
            @csrf
            @method('PUT')
            <p class="mg-b-10">نام دسته بندی</p>
            <input type="text" class="form-control @error('title')is-invalid @enderror" name="title"  placeholder="title" value="{{ $country->title }}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-main-primary">بروزرسانی</button>
        </form>
    </div>
@stop

