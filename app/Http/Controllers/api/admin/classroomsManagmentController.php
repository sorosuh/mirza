<?php

namespace App\Http\Controllers\api\admin;

use App\classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\createClassRequest;
use App\question;

class classroomsManagmentController extends Controller
{
    public function createClassroom(createClassRequest $request){
        $classroom = new classroom();
        $classroom->name = $request->name;
        $classroom->major = $request->major;
        $classroom->code = $request->code;
        $classroom->creator = $request->creator;

        $classroom->save();
    }

    public function editClass(createClassRequest $request , $id){
        // $question = classroom::where('id',$id)->update([
        //     'name'=> $request->name,
        //     'major'=> $request->major,
        //     'code'=> $request->code,
        //     'code'=> $request->code,
        //     'creator'=> $request->creator,
        // ]);

        $class = classroom::find($id);
        $this->authorize('update',$class);
             classroom::update([
            'name'=> $request->name,
            'major'=> $request->major,
            'code'=> $request->code,
            'code'=> $request->code,
            'creator'=> $request->creator,
        ]);
        return[
            'status'=>true,
        ];

    }
}
