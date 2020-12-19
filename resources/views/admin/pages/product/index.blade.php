@extends('admin.layout')
@section('title', $title ?? '')
@section('content')







<div class="row row-xs">
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<div class="dropdown dropleft">
			<a href="{{ route('admin.product.create') }}" class="btn ripple btn-danger">افزودن محصول</a>
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
															<table  id="example" class="table mg-b-0 display">
																<thead>
																	<tr>
																		<th>ردیف</th>
																		<th>عنوان محصول</th>
																		<th>برند</th>

                                                                        <th>دسته بندی</th>



																		<th>نویسنده</th>
                                                                        <th>تاریخ</th>

																		<th>عملیات</th>

																	</tr>
																</thead>
																<tbody>
                                                                        @foreach( $products as $product )
                                                                            <tr>
                                                                                <td>{{ $product->id }}</td>
                                                                                <td><a target="_blank" href="{{url('products/'.$product->id.'-'.str_replace(' ','-',$product->title))}}" >  {{$product->title}}
                                                                                    </a></td>
                                                                                <td>{{ $product->brand_id }}</td>

                                                                                <td>{{ $product->category_id }}</td>
                                                                                <th>نویسنده</th>
                                                                                <th>{{ jdate($product->created_at )}}</th>

                                                                                <td>


                                                                                    <a class="btn small btn-main-primary" href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-sm btn-warning">ویرایش<i class="fa fa-pencil-alt"></i></a>
                                                                                    <div class="btn-group">
                                                                                        <form onsubmit="return confirm(' آیا از حذف این آیتم اطمینان دارید ؟')" action="{{ route('admin.product.destroy', $product->id) }}" method="POST" >
                                                                                            @csrf
                                                                                            @method('delete')
                                                                                            <button type="submit" class="btn btn-main-primary">

                                                                                                حذف                                                 <i class="fa fa-pencil-alt"></i>
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
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

