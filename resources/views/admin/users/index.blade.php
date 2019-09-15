@extends('admin.layouts.superMaster')


@section('content')
    <h1>لیست دانشجویان</h1>
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
        @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->family}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->major}}</td>
                <td>{{$student->phone}}</td>
                <td><a  href="{{route('superAdmin.edit',$student->id)}}"><button type="button" class="btn btn-warning">ویرایش</button></a></td>
                <td><a href="{{route('superAdmin.destroy',$student->id)}}"><button type="button" class="btn btn-danger">حذف</button></a></td>
                <td><a href="information\{{$student->id}}"><button type="button" class="btn btn-info">مشخصات</button></a></td>
            </tr>
        @endforeach

    </table>
@endsection
