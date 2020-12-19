@extends('admin.layout')
@section('title', $title ?? '')
@section('content')


    <div class="row row-xs">
        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
            <div class="dropdown dropleft">
                <a href="{{ route('admin.category.create') }}" class="btn ripple btn-danger">افزودن دسته بندی</a>
            </div>
        </div>
    </div>



    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="card-title mb-1">لیست دسته بندی</h6>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>نام دسته بندی</th>
                                <td>دسته بندی والد</td>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <th>{{$category->id}}</th>
                                        <th>{{$category->title}}</th>
                                        <th>{{$category->parent}}</th>
                                        <th >
                                            <a class="btn small btn-main-primary" href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-sm btn-warning">ویرایش<i class="fa fa-pencil-alt"></i></a>
                                            <div class="btn-group">
                                                <form onsubmit="return confirm(' آیا از حذف این آیتم اطمینان دارید ؟')" action="{{ route('admin.category.destroy', $category->id) }}" method="POST" >
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-main-primary">

حذف                                                 <i class="fa fa-pencil-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </th>
                                    </tr>
                                @endforeach
                                <ul>
{{--                                    @foreach ($categories as $category)--}}
{{--                                        <li>{{ $category->title }}</li>--}}
{{--                                        <ul>--}}
{{--                                            @foreach ($category->childrenCategories as $childCategory)--}}
{{--                                                @include('child_category', ['child_category' => $childCategory])--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    @endforeach--}}
                                </ul>
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
