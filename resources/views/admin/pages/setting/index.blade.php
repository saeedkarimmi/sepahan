@extends('admin.layout')
@section('title', $title ?? '')

@section('content')

<!-- endRow -->
<div class="row">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                <h3 class="col-md-4">
                    <label class="mg-b-0">تنظیمات</label>
                </h3>
                <br>
                <div class="table-responsive">
                    <table class="table mg-b-0">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>عنوان</th>

                            <th>تاریخ</th>

                            <th>عملیات</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $settings as $set )
                            <tr>
                                <td>{{ $set->id }}</td>
                                <td>{{$set->name}}</td>

                                <th>{{ jdate($set->created_at )}}</th>

                                <td>


                                    <a class="btn small btn-main-primary" href="{{ route('admin.setting.edit', $set->id) }}" class="btn btn-sm btn-warning">ویرایش</a>

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


@stop
