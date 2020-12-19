@extends('dashboard.layout')
@section('title', $title)
@section('content')


                                        <div id="DeletePostForm">
											<h4 >حذف خبر</h4>
											<form  action="{{ route('post-delete-post', ['id'=> $currentPost->id]) }}" method="post" class="form-group">
													@csrf
													ایا میخواهید   <b>{{ $currentPost->title }} </b>را حذف کنید ؟
													<br>
										
													<button type="submit" class="btn btn-danger">بله </button>
													<a href="{{ route('posts') }}" class="btn btn-warning">خیر</a>
											</form>
                                        </div>
@stop
