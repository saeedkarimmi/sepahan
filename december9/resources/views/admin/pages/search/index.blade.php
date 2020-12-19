@extends('admin.layout')
@section('title', $title ?? '')
@section('content')




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
                                <th>عنوان سرچ</th>
                                <th>تاریخ</th>
                                <th>عملیات</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $searches as $search )
                                <tr>
                                    <td>{{ $search->id }}</td>
                                    <td>{{ $search->title }}</td>

                                    <td>{{ jdate($search->created_at ) }}</td>

                                    <td>
                                        <div class="btn-group">
                                            <form onsubmit="return confirm(' آیا از حذف این آیتم اطمینان دارید ؟')" action="{{ route('admin.search.destroy', $search->id) }}" method="POST" >
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
