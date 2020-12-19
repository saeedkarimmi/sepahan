@extends('dashboard.layout')

@section('title', $title)
@section('content')
<!-- Row -->
  <div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
                                        <h6 class="card-title mb-1">لیست کاربران</h6>
                                        <table class="table table-bordered table-hover">
											<thead>
												<tr>
													<th>ردیف</th>
													<th>نام</th>
													<th>نام خانوادگی</th>
													<th>عملیات</th>
												</tr>
											</thead>
											<tbody>
												@foreach( $users as $user )
													<tr>
														<td>{{ $user->id }}</td>
														<td>{{ $user->firstname }}</td>
														<td>{{ $user->lastname }}</td>
														<td>
															<a href="{{ route('user-edit', ['id'=> $user->id]) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>
															<a href="{{ route('user-delete', ['id'=> $user->id]) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
															
														</td>
													</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									@if( isset( $message ) )
										<div class="alert alert-success">{{ $message }}</div>
									@endif
									@if( $action == 'add' )
										<div id="AddUserForm">
											<h6 class="card-title mb-1">افزودن کاربر</h6>
											<form  action="{{ route('user-create') }}" method="post" class="form-group">
													@csrf
													<p class="mg-b-10">نام</p>
													<input type="text" class="form-control @error('firstname')is-invalid @enderror" name="firstname"  placeholder="Firstname" value="{{ old('firstname') }}">
													@error('firstname')
														<div class="alert alert-danger">{{ $message }}</div>
													@enderror
													<p class="mg-b-10">نام خانوادگی</p>
													<input type="text" class="form-control @error('lastname')is-invalid @enderror" name="lastname"  placeholder="Lastname" value="{{ old('lastname') }}">
													@error('lastname')
														<div class="alert alert-danger">{{ $message }}</div>
													@enderror
													<p class="mg-b-10">ایمیل</p>
													<input type="email" class="form-control @error('email')is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
													@error('email')
														<div class="alert alert-danger">{{ $message }}</div>
													@enderror
													<p class="mg-b-10">پسورد</p>
													<input type="password" class="form-control @error('password')is-invalid @enderror" name="password" placeholder="Password">
													@error('password')
														<div class="alert alert-danger">{{ $message }}</div>
													@enderror
													
													<button type="submit" class="btn btn-main-primary">افزودن</button>
											</form>
										</div>
									@elseif( $action == 'edit' )
										<div id="EditUserForm">
											<h6 class="card-title mb-1">ویرایش کاربر</h6>
											<form  action="{{ route('user-edit-post', ['id'=> $currentUser->id]) }}" method="post" class="form-group">
													@csrf
													<p class="mg-b-10">نام</p>
													<input type="text" class="form-control @error('firstname')is-invalid @enderror" name="firstname"  placeholder="Firstname" value="{{ $currentUser->firstname }}">
													@error('firstname')
														<div class="alert alert-danger">{{ $message }}</div>
													@enderror
													<p class="mg-b-10">نام خانوادگی</p>
													<input type="text" class="form-control @error('lastname')is-invalid @enderror" name="lastname"  placeholder="Lastname" value="{{ $currentUser->lastname }}">
													@error('lastname')
														<div class="alert alert-danger">{{ $message }}</div>
													@enderror
													<p class="mg-b-10">ایمیل</p>
													<input type="email" class="form-control @error('email')is-invalid @enderror" name="email" placeholder="Email" value="{{ $currentUser->email }}">
													@error('email')
														<div class="alert alert-danger">{{ $message }}</div>
													@enderror
													<p class="mg-b-10">پسورد</p>
													<input type="password" class="form-control @error('password')is-invalid @enderror" name="password" placeholder="Password">
													@error('password')
														<div class="alert alert-danger">{{ $message }}</div>
													@enderror
													
													<button type="submit" class="btn btn-main-primary">بروزرسانی</button>
											</form>
										</div>
									@elseif( $action == 'delete' )
										<div id="DeleteUserForm">
											<h6 class="card-title mb-1">حذف کاربر</h6>
											<form  action="{{ route('user-delete-post', ['id'=> $currentUser->id]) }}" method="post" class="form-group">
													@csrf
													آیا از حذف <b>{{ $currentUser->firstname }} {{ $currentUser->lastname }}</b> مطمين هستید ?
													<br>
													<button type="submit" class="btn btn-danger">بله</button>
													<a href="{{ route('users') }}" class="btn btn-warning">خیر</a>
											</form>
										</div>
									@endif
								</div>
							</div>
						</div>
					</div>
					
					<!-- End Row -->
                    @stop