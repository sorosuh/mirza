<?php

namespace App\Http\Controllers\api\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\registerRequest;
use App\User;

class registerController extends Controller
{
    public function register(registerRequest $request){

       $user =  User::create([
            'name'  =>$request->name,
            'family'=>$request->family,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'major' =>$request->major,
            'password'=>bcrypt($request->password)
        ]);

        return [
            'status'=>true,
             'Message'=>'ثبت نام موفقیت امیز',
             'token'=>$user->createToken('cerate')->accessToken,
        ];
    }
}
