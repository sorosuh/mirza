<?php

namespace App\Http\Controllers\api\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\master;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    public function guard()
    {
     return Auth::guard('master');
    }

    public function login(Request $request){
        // $master = master::where('name',$request->name)->first();
        // if($master){
        //     if($request->password == $master->password){
        //         $token = $master->createToken('token')->accessToken;
        //         $response = ['Token'=>$token];
        //         return response($response,200);
        //     }else{
        //         $response='رمز درست نیست';
        //         return response($response,422);
        //     }
        //     $response = 'کاربر وجود ندارد';
        //     return  response($response,422);

        // }


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
