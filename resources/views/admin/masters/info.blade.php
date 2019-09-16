@extends('admin.layouts.superMaster')


@section('content')
    <h1>لیست اساتید</h1>
    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>نام</th>
            <th>نام خانوادگی</th>
            <th>ایمیل</th>
            <th>رشته</th>
            <th>شماره تماس</th>
            <th>ویرایش</th>
            <th>حذف</th>
        </tr>
        @foreach ($masters as $master)
            <tr>
                <td>{{$master->id}}</td>
                <td>{{$master->name}}</td>
                <td>{{$master->family}}</td>
                <td>{{$master->email}}</td>
                <td>{{$master->major}}</td>
                <td>{{$master->phone}}</td>
                <td><a  href=""><button type="button" class="btn btn-warning">ویرایش</button></a></td>
                <td><a href=""><button type="button" class="btn btn-danger">حذف</button></a></td>
                <td><a href=""><button type="button" class="btn btn-info">مشخصات</button></a></td>
            </tr>
        @endforeach

    </table>
@endsection
