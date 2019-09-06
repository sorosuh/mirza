<?php

namespace App\Http\Controllers\api\user;

use App\classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class classroomsController extends Controller
{
    public function show($id){
        $user = User::find($id);
        foreach ($user->classrooms as $classroom) {
            return[
                'id'=>$classroom->id,
                'name'=>$classroom->name,
                'major'=>$classroom->major,
                'creator'=>$classroom->creator,
                'code'=>$classroom->code
            ];
        }
    }
}
