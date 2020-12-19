@extends('dashboard.layout')

@section('title', $title)
@section('content')
<!-- social media -->

                        <div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h2 >شبکه های اجتماعی</h2>
									</div>
									<div class="">
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="mg-b-0">Instagram</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" name='instagram' placeholder="Enter your instagram link" type="text">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="mg-b-0" >Twitter</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" name='twitter' placeholder="Enter your Twitter link" type="text">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="mg-b-0">Facebook</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" name="facebook" placeholder="Enter your Facebook link" type="text">
											</div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="mg-b-0">Linkedin</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control"  name="linkedin" placeholder="Enter your Linkedin link" type="text">
											</div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="mg-b-0">Telegram</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control"  name="telegram" placeholder="Enter your Telegram link" type="text">
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



<!-- Menu -->

<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h2 >منو</h2>
									    {!! Menu::render() !!}
									</div>
								</div>
                            </div>
                        </div>
<!--  end menu -->


  <!-- FOOTER -->


					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
                                        <h2 >فوتر</h2>
										<h6 class="card-title mb-1"></h6>
									</div>
									<div class="row row-sm mg-b-20">
										<div class="col-lg-4">
											<p class="mg-b-10">ستون ۱</p>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <textarea name="footer_1" class="form-control editor @error('description')is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-main-primary">ذخیره</button>
										</div><!-- col-4 -->
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<p class="mg-b-10">ستون ۲</p>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <textarea  name="footer_2" class="form-control editor @error('description')is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-main-primary">ذخیره</button>
										</div><!-- col-4 -->
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                            <p class="mg-b-10">ستون ۳</p>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="footer_3" class="form-control editor @error('description')is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-main-primary">ذخیره</button>

										</div><!-- col-4 -->
                                        <!-- col-4 -->
                                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                            <p class="mg-b-10">ستون ۴</p>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="footer_4" class="form-control editor @error('description')is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-main-primary">ذخیره</button>
                                        </div><!-- col-4 -->
									</div>

								</div>
							</div>
						</div>
					</div>

<!--  end FOOTER  -->


@stop
