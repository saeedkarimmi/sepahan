@extends('admin.layout')
@section('title', $title ?? '')
@section('content')
    <div class="row row-xs">
        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
            <div class="dropdown dropleft">
                <a href="{{ route('admin.news.create') }}" class="btn ripple btn-danger">افزودن خبر</a>
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
                        <table id="example" class="table mg-b-0 display">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان خبر</th>
{{--                                <th>نویسنده</th>--}}
                                <th>تاریخ</th>
                                <th>عملیات</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $posts as $post )
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td><a target="_blank" href="{{ route('admin.news.index', ['postSlug'=> $post->slug]) }}">{{ $post->title }}</a></td>
{{--                                    <th>{{$post->user->name}}</th>--}}

                                    <td>{{ jdate($post->created_at ) }}</td>

                                    <td>
{{--                                        <a class="btn small btn-main-primary" href="{{ route('admin.news.edit', $post->id) }}" class="btn btn-sm btn-warning">ویرایش<i class="fa fa-pencil-alt"></i></a>--}}
                                        <div class="btn-group">
                                            <form onsubmit="return confirm(' آیا از حذف این آیتم اطمینان دارید ؟')" action="{{ route('admin.news.destroy', $post->id) }}" method="POST" >
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-main-primary">

                                                    حذف                                                 <i class="fa fa-pencil-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <a class="btn ripple btn-main-primary" href="{{ route('admin.news.edit', [$post->id]) }}" class="btn btn-sm btn-warning">ویرایش<i class="fa fa-pencil-alt"></i></a>
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
