<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\View\View;

class UsersInfoController extends Controller
{
    public function showQuestions($id){
        $user = User::find($id);
        $questions = $user->questions;
        return View('admin.users.info',compact('questions'));
    }

    public function editQuestions($id){

    }

    public function deleteQuestions($id){

    }

    public function showclass($id){

    }

}
