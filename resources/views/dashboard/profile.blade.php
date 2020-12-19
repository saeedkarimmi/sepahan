@extends('dashboard.layout')

@section('title', 'Index')
@section('content')
<div class="container">
  <div class="row">
        <form action="{{route(profile)}}" method="post">
        @csrf
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="avatar" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                    <input type="submit" value="upload" class="btn btn-success mr-4">
            </div>
        </form>
    </div>
</div>


@stop