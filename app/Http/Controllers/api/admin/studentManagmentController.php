<?php

namespace App\Http\Controllers\api\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\registerRequest;
use App\User;

class studentManagmentController extends Controller
{
    public function show(){
        return $user = User::all();
    }

    public function editStudent($id , request $request){
        $question = User::where('id',$id)->update([
            'name'=> $request->name,
            'family'=> $request->family,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'score'=> $request->score,
        ]);
    }
}
