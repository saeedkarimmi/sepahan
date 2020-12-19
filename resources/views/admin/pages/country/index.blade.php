@extends('admin.layout')
@section('title', $title ?? '')
@section('content')


    <div class="row row-xs">
        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
            <div class="dropdown dropleft">
                <a href="{{ route('admin.country.create') }}" class="btn ripple btn-danger">افزودن کشور</a>
            </div>
        </div>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="card-title mb-1">لیست کشورها</h6>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>نام کشور</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($countries as $country)
                                    <tr>
                                        <th>{{$country->id}}</th>
                                        <th>{{$country->title}}</th>

                                        <th>
                                            <a class="btn ripple btn-main-primary" href="{{ route('admin.country.edit', ['country'=> $country]) }}" class="btn btn-sm btn-warning">ویرایش<i class="fa fa-pencil-alt"></i></a>
                                            <form onsubmit="return confirm(' r u sure?')" action="{{ route('admin.country.destroy', ['country'=> $country]) }}" method="POST" >
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-main-primary"> حذف</button>

                                            </form>

                                        </th>

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
