@extends('dashboard.layout')
@section('title', $title)
@section('content')
<div class="row row-xs">
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<div class="dropdown dropleft">
			<a href="{{ route('page-create') }}" class="btn ripple btn-danger">افزودن برگه</a>
		</div>
	</div>
</div>



<!-- Row -->




<!-- endRow -->
									<div class="row">
											<div class="col-lg-12">
												<div class="card custom-card">
													<div class="card-body">

														<div class="table-responsive">
															<table class="table mg-b-0">
																<thead>
																	<tr>
																		<th>ردیف</th>
																		<th>عنوان</th>
																		<th>تاریخ</th>
																		<th>نویسنده</th>

																		<th>عملیات</th>

																	</tr>
																</thead>
																<tbody>
																@foreach( $pages as $page )
																		<tr>
																			<td>{{ $page->id }}</td>
																			<td><a target="_blank" href="{{ route('show-page', ['pageSlug'=> $page->slug]) }}">{{ $page->title }}</a></td>
																			<td>{{ jdate($page->created_at  ) }}</td>
																			<th>نویسنده</th>

																			<td>
																				<a class="btn ripple btn-main-primary" href="{{ route('page-edit', ['id'=> $page->id]) }}" class="btn btn-sm btn-warning">ویرایش<i class="fa fa-pencil-alt"></i></a>
																				<a class="btn ripple btn-secondary" href="{{ route('page-delete', ['id'=> $page->id]) }}" class="btn btn-sm btn-danger">حذف<i class="fa fa-trash"></i></a>
																			</td>
																		</tr>
																@endforeach
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>




		<!-- Row -->
<!-- Row -->
@stop
