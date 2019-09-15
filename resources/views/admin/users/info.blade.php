@extends('admin.layouts.superMaster')

@section('content')

    <h3 >لیست سوالات</h3>

    <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th>عنوان</th>
            <th>رشته</th>
            <th>میزان سختی</th>
            <th>کد</th>
            <th>قیمت</th>
          </tr>
        </thead>

            @foreach ($questions as $question)
            <tr>

                    <td>{{$question->title}}</td>
                    <td>{{$question->major}}</td>
                    <td>{{$question->dificulty}}</td>
                    <td>{{$question->code}}</td>
                    <td>{{$question->price}}</td>
                    <td><a  href=""><button type="button" class="btn btn-warning">ویرایش</button></a></td>
                    <td><a href=""><button type="button" class="btn btn-danger">حذف</button></a></td>

            </tr>
            @endforeach


      </table>

@endsection
