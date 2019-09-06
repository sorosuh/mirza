<?php

namespace App\Http\Controllers\api\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\createQuestionRequest;
use App\Http\Requests\fileRequest;
use App\question;

class questionsManagmentController extends Controller
{
    public function create(createQuestionRequest $request){

        $question = new question();
        $question->dificulty = $request->dificulty;
        $question->major = $request->major;
        $question->title = $request->title;
        $question->code = $request->code;
        $question->link = $request->link;
        $question->price = $request->price;
        $question->save();

    }

    public function editPrice($id , Request $request){
        $question = question::where('id',$id)->first();
        $question->price =$request->price;
        $question->save();
    }

    public function editQuestion($id , createQuestionRequest $request){
        $question = question::where('id',$id)->update([
            'dificulty'=> $request->dificulty,
            'major'=> $request->major,
            'title'=> $request->title,
            'code'=> $request->code,
            'link'=> $request->link,
            'price'=> $request->price,
        ]);
    }

    public function deleteQuestion($id){
        $question = question::where('id',$id)->first();
        $question->delete();
    }

    public function showQuestions(){
        return $question = question::all();
    }

    public function uploadQuestion(fileRequest $request){
        return $request->file('file');
    }
}
