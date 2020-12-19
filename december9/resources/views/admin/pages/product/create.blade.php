@extends('admin.layout')
@section('title', $title ?? '')
@section('content')

@if( isset( $message ) )
	<div class="alert alert-success">{{ $message }}</div>
@endif

<div class="row" id="AddPostForm">
	<div class="col-lg-12 col-md-12">
		<div class="card custom-card">
			<div class="card-body">
				<div>
					<h3 class="card-title mb-1">افزودن محصول</h3>
				</div>
				<form  action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data" class="form-group">
                @csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<p class="mg-b-10">عنوان محصول</p>
							<input type="text" class="form-control" @error('title')is-invalid @enderror name="title" placeholder="Title" value="{{ old('title') }}">
							@error('title')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>

					</div>
                    <div class="col-md-6">
						<div class="form-group">
							<p class="mg-b-10">کد مجازی</p>
							<input type="text" class="form-control @error('virtual_code')is-invalid @enderror" name="virtual" placeholder="کد ۱۰ رقمی مجازی محصول وارد شود" value="{{ old('virtual_code') }}">
							@error('virtual_code')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
								<p class="mg-b-10">تیپ کالا</p>
								<input type="text" class="form-control @error('tip_product')is-invalid @enderror" name="tip_product" placeholder="tip_product" value="{{ old('tip_product') }}">
								@error('tip_product')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>

					</div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class="mg-b-10">کد کالا</p>
                            <input type="text" class="form-control @error('code_product')is-invalid @enderror" name="code_product" placeholder="code_product" value="{{ old('code_product') }}">
                            @error('code_product')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-4">

                            <div class="form-group">
                                <label >برند</label>

                                <select name="brand_id" class="form-control">
                                    @foreach( \App\Brand::get() as $brand )

                                        <option value="{{$brand->id}}">{{$brand->title}}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label >دسته بندی</label>

                            <select name="category_id" class="form-control">
                                @foreach( \App\Category::get() as $category )

                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                                    <label >کشور</label>

                                    <select name="country_id" class="form-control">
                                        @foreach( \App\Country::get() as $country )

                                            <option value="{{$country->id}}">{{$country->title}}</option>
                                        @endforeach

                                    </select>
                                </div>

                    </div>

                        <div class="col-md-6">
						<div class="form-group">
								<p class="mg-b-10">آپلود عکس(ابعاد ۶۰۰*۶۰۰)</p>
								<input type="file" name="images[]" multiple/>
								@error('')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>

					</div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class="mg-b-10">گواهینامه pdf</p>
                            <input type="file" name="certificate_pdf_url"  />
                            @error('')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <p class="mg-b-10">pdf دشلید</p>
                            <input type="file" name="datashid_pdf_url" />
                            @error('')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class="mg-b-10">pdf manual</p>
                            <input type="file"  name="manual_pdf_url" />
                            @error('')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

{{--                    <div cla ss="row">--}}
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p class="mg-b-10">چکیده</p>
                                    <input type="text" class="form-control @error('description_short')is-invalid @enderror" name="description_short" placeholder="description_short" value="{{ old('description_short') }}">
                                    @error('description_short')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <p class="mg-b-10">توضیحات</p>
                                    <textarea class="form-control @error('description')is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                </div>
                            </div>



                            </hr>



                    <div class="col-md-6">
						<div class="form-group">
							<p class="mg-b-10">محصول مرتبط ۱</p>
							<input type="text" class="form-control @error('virtual_code_m')is-invalid @enderror" name="virtual_code" placeholder="کد مجازی محصول وارد شود" value="{{ old('virtual_code_m') }}">
							@error('virtual_code_m')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<p class="mg-b-10">محصول مرتبط ۲</p>
							<input type="text" class="form-control @error('virtual_code_m1')is-invalid @enderror" name="virtual_code_m1" placeholder="کد مجازی محصول وارد شود" value="{{ old('virtual_code_m1') }}">
							@error('virtual_code_m1')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<p class="mg-b-10">محصول مرتبط ۳</p>
							<input type="text" class="form-control @error('virtual_code_m2')is-invalid @enderror" name="virtual_code_m2" placeholder="کد مجازی محصول وارد شود" value="{{ old('virtual_code_m2') }}">
							@error('virtual_code_m2')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<p class="mg-b-10">محصول مرتبط ۴</p>
							<input type="text" class="form-control @error('virtual_code_m3')is-invalid @enderror" name="virtual_code_m3" placeholder="کد مجازی محصول وارد شود" value="{{ old('virtual_code_m3') }}">
							@error('virtual_code_m3')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<p class="mg-b-10">محصول مرتبط ۵</p>
							<input type="text" class="form-control @error('virtual_code_m4')is-invalid @enderror" name="virtual_code_m4" placeholder="کد مجازی محصول وارد شود" value="{{ old('virtual_code_m4') }}">
							@error('virtual_code_m4')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
						</div>

					</div>


                         </hr>
                         <br>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-lg-6">
                                <p class="mg-b-10"> </p>
                                <label class="ckbox mg-b-10"><input name="show_in_homepage" type="checkbox"><span>محصول ویژه</span></label>
                            </div>
                        </div>

                    </div>







                    <button type="submit" class="btn btn-main-primary">ایجاد محصول</button>
				</form>

                </div>

            </div>

        </div>
	</div>
</div>
@stop
