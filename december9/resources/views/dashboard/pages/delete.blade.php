@extends('dashboard.layout')
@section('title', $title)
@section('content')


                                        <div id="DeletePageForm">
											<h6 class="card-title mb-1">Delete Page</h6>
											<form  action="{{ route('page-delete-post', ['id'=> $currentPage->id]) }}" method="post" class="form-group">
													@csrf
													ایا میخواهید   <b>{{ $currentPage->title }} </b>را حذف کنید ؟

													<br>
													<button type="submit" class="btn btn-danger">بله</button>
													<a href="{{ route('pages') }}" class="btn btn-warning">خیر</a>
											</form>
                                        </div>
@stop
