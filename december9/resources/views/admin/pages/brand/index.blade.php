@extends('admin.layout')
@section('title', $title ?? '')
@section('content')
    <div class="row row-xs">
        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
            <div class="dropdown dropleft">
                <a href="{{ route('admin.brand.create') }}" class="btn ripple btn-danger">افزودن برند</a>
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
                                <th>اسم برند</th>
                                <th>نویسنده</th>

                                <th>تاریخ</th>

                                <th>عملیات</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $brands as $brand )
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td><a target="_blank" href="{{ route('admin.brand.index', ['brandSlug'=> $brand->slug]) }}">{{ $brand->title }}</a></td>
                                   
                                    <th>
                                        {{\App\User::find($brand->user_id)->firstname}} {{\App\User::find($brand->user_id)->lastname}}
                                    </th>

                                    <td>{{ jdate($brand->created_at) }}</td>

                                    <td>
                                       <a class="btn ripple btn-main-primary" href="{{ route('admin.brand.edit', ['brand'=> $brand]) }}" class="btn btn-sm btn-warning">ویرایش<i class="fa fa-pencil-alt"></i></a>
                                        <form onsubmit="return confirm('r u sure')" action="{{ route('admin.brand.destroy', ['brand'=> $brand]) }}" method="POST" >
                                           @csrf
                                           @method('delete')
                                           <button type="submit" class="btn btn-main-primary"> حذف</button>

                                       </form>
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
