<?php

namespace App\Http\Controllers\api\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function login(loginRequest $request){
        $credentials = $request->only('name','password');
       // dd($credentials);

        if(Auth::attempt( $credentials)){
            $user = Auth::user();

            return [
                'status'=>true,
                'message'=>'ورود موفقیت امیز',
                'token'=>$user->createToken('create')->accessToken

            ];
        }

        return[
            'status'=>false,
            'message'=>' ورود موفقیت امیز نبود',
        ];
    }
}
