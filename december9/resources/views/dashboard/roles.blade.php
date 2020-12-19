@extends('dashboard.layout')

@section('title', $title)
@section('content')
<!-- Row -->
  <div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
                                        <h6 class="card-title mb-1">نقش ها</h6>
                                        <table class="table table-bordered table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>نام نقش</th>
													<th>عملیات</th>

												</tr>
											</thead>
											<tbody>
												@foreach( $roles as $role )
													<tr>
                                                        <td>{{ $loop->iteration }}</td>

														<td>{{ $role->name }}</td>
														<td>
															<a href="{{ route('role-edit', ['id'=> $role->id]) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>
															<a href="{{ route('role-delete', ['id'=> $role->id]) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
										<div id="AddRoleForm">
											<h6 class="card-title mb-1">افزودن نقش</h6>
											<form  action="{{ route('role-create') }}" method="post" class="form-group">
													@csrf
													<p class="mg-b-10">نام نقش</p>
													<input type="text" class="form-control @error('name')is-invalid @enderror" name="name"  placeholder="name" value="{{ old('name') }}">
													@error('name')
														<div class="alert alert-danger">{{ $message }}</div>
													@enderror
													
													<p class="mg-b-10">   دسترسی ها</p>
													<div class="row">
															@foreach( $permissions as $permission )
																	<div class="col-lg-3">
																			<label class="ckbox"><input name="permissions[]" type="checkbox"><span>{{ __('permissions.' . $permission->name) }}</span></label>
																	</div>
															@endforeach
													</div>
													<br>
													<br>
													<br>
													<button type="submit" class="btn btn-main-primary">افزودن نقش</button>
													<button type="reset" class="btn btn-warning">پاک کردن فیلدها</button>
											</form>
										</div>
									@elseif( $action == 'edit' )
										<div id="EditRoleForm">
											<h6 class="card-title mb-1">ویرایش نقش</h6>
											<form  action="{{ route('role-edit-post', ['id'=> $currentRole->id]) }}" method="post" class="form-group">
													@csrf
													<p class="mg-b-10">نام نقش</p>
													<input type="text" class="form-control @error('name')is-invalid @enderror" name="name"  placeholder="name" value="{{ $currentRole->name }}">
													@error('name')
														<div class="alert alert-danger">{{ $message }}</div>
													@enderror
													
													
													
													<button type="submit" class="btn btn-main-primary">بروزرسانی دسترسی</button>
													<button type="reset" class="btn btn-warning">پاک کردن فیلدها</button>
											</form>
										</div>
									@elseif( $action == 'delete' )
										<div id="DeleteRoleForm">
											<h6 class="card-title mb-1">حذف دسترسی</h6>
											<form  action="{{ route('role-delete-post', ['id'=> $currentRole->id]) }}" method="post" class="form-group">
													@csrf
													ایا میخواهید  <b>{{ $currentRole->name }} </b>را حذف کنید ؟
													<br>
													<button type="submit" class="btn btn-danger">بله</button>
													<a href="{{ route('roles') }}" class="btn btn-warning">خیر</a>
											</form>
										</div>
									@endif
								</div>
							</div>
						</div>
					</div>
					
					<!-- End Row -->
                    @stop