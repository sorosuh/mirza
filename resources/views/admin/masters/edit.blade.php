@extends('admin.layouts.superMaster')

@section('content')

<form  method="POST" action="editmaster/{{$master->id}}"  class=" col-md-3 offset-md-4">
        @csrf
    <h3>  ویرایش کاربر  {{$master->name}}</h3><br/>
        @if (!empty($errors))
            @foreach ($errors as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
              </div>
            @endforeach
        @endif
        <div class="form-group">
          <label for="tetx">نام:</label>
        <input type="text" class="form-control" name="name" placeholder="{{$master->name}}">
        </div>

        <div class="form-group">
                <label for="tetx">نام خانوادگی:</label>
                <input type="text" class="form-control" name="family" placeholder="{{$master->family}}">
        </div>

        <div class="form-group">
                <label for="tetx">ایمیل :</label>
                <input type="email" class="form-control" name="email" placeholder="{{$master->email}}">
        </div>

        <div class="form-group">
            <label for="tetx">رشته :</label>
            <input type="text" class="form-control" name="major" placeholder="{{$master->major}}">
    </div>

        <div class="form-group">
                <label for="tetx">شماره تماس :</label>
                <input type="text" class="form-control" name="phone" placeholder="{{$master->phone}}">
        </div>

        <div class="form-group">
            <label for="tetx">رمزعبور:</label>
            <input type="password" class="form-control" name="phone" placeholder="رمز عبور">
    </div>



        <button type="submit" class="btn btn-success">ثبت</button>
      </form>

@endsection
