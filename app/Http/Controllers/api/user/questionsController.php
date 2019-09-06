<?php

namespace App\Http\Controllers\api\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use phpDocumentor\Reflection\Types\Integer;

class questionsController extends Controller
{
    public function show($id){
        $user = User::findOrFail($id);

        foreach ($user->questions as $questions) {
            return [
                'dificulty'=>$questions->dificulty,
                'major'=>$questions->major  ,
                'title'=>$questions->title,
                'code'=>$questions->code,
                'link'=>$questions->link,
                'price'=>$questions->price,
                'new_price'=>$questions->cnew_pricede,
                'verify'=>$questions->verify
            ];
        }

    }
}
