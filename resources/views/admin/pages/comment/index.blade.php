@extends('admin.layout')
@section('title', $title ?? '')
@section('content')
    <div class="row row-xs">
        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
            <div class="dropdown dropleft">
                <a href="{{ route('brand-create') }}" class="btn ripple btn-danger">افزودن برند</a>
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
                                <th>نام کشور</th>

                                <th>تاریخ</th>
                                <th>نویسنده</th>

                                <th>عملیات</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $brands as $brand )
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td><a target="_blank" href="{{ route('brands', ['brandSlug'=> $brand->slug]) }}">{{ $brand->title }}</a></td>
                                    <td>{{ $brand->country }}</td>

                                    <td>{{ $brand->created_at }}</td>
                                    <th>نویسنده</th>

                                    <td>
                                        <a class="btn ripple btn-main-primary" href="{{ route('brand-edit', ['id'=> $brand->id]) }}" class="btn btn-sm btn-warning">ویرایش<i class="fa fa-pencil-alt"></i></a>
                                        <a class="btn ripple btn-secondary" href="{{ route('brand-delete', ['id'=> $brand->id]) }}" class="btn btn-sm btn-danger">حذف<i class="fa fa-trash"></i></a>
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
