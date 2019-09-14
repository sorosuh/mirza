@extends('admin.layouts.superMaster')


@section('content')
    <h1>لیست دانشجویان</h1>
    <table class="table table-hover">
        <tr>
            <td>نام</td>
            <td>نام خانوادگی</td>
            <td>ایمیل</td>
            <td>شماره تماس</td>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->family}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td><button type="button" class="btn btn-warning">ویرایش</button></td>
                <td><button type="button" class="btn btn-danger">حذف</button></td>
            </tr>
        @endforeach

    </table>
@endsection
