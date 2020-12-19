@extends('admin.layout')

@section('content')
<!-- social media -->

                        <div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
                                    <form  action="{{ route('admin.setting.update', ['setting'=> $setting]) }}" method="post" class="form-group" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="">
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="mg-b-0">{{$setting->name}}</label>
											</div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <p class="mg-b-10">توضیحات</p>
                                                    <textarea  class="form-control editor @error('value')is-invalid @enderror" id="value" name="value">
                                                        {{ ( old('value') && old('value') != $setting->value )?old('value'):$setting->value }}
                                                        <!--{{$setting->value}}-->
                                                        </textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p class="mg-b-10">آپلود عکس</p>
                                                    <input type="file" name="img" />
                                                    @error('img')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>
										</div>







										<div class="form-group row justify-content-end mb-0">
											<div class="col-md-8 pl-md-2">
												<button class="btn ripple btn-primary pd-x-30 mg-r-5">ذخیره</button>
											</div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
<!--  end social media -->







@stop
