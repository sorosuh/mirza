<?php

namespace App\Http\Controllers\api\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class contactsController extends Controller
{
    public function show($id){
        $user = User::find($id);
        foreach ($user->contacts as $contact) {
            return[
                'id'=>$contact->id,
                'student_id'=>$contact->student_id,
                'student_national_num'=>$contact->student_national_num,
                'master_national_num'=>$contact->master_national_num,
                'subject'=>$contact->subject,
                'description'=>$contact->description
            ];
        }
    }
}
