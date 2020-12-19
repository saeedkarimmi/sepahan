@extends('admin.layout')
@section('title', $title ?? '')
@section('content')

    <div class="col-md-12">
        <div class="card custom-card">
            <div class="card-body">


                    <div id="AddCountry">
                        <h6 class="card-title mb-1">افزودن کشور</h6>
                        <form  action="{{ route('admin.country.store') }}" method="post" class="form-group">
                            @csrf
                            <p class="mg-b-10">نام  کشور</p>
                            <input type="text" class="form-control @error('title')is-invalid @enderror" name="title"  placeholder="title" value="{{ old('title') }}">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror




                            <button type="submit" class="btn btn-main-primary">افزودن دسته بندی</button>

                        </form>
                    </div>
            </div>
        </div>
    </div>
@stop
