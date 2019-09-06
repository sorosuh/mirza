<?php

namespace App\Http\Controllers\api\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class transactionsController extends Controller
{
    public function show($id){
        $user = User::find($id);
            foreach ($user->transactions as $transaction) {
                return[
                    'id'=>$transaction->id,
                    'user_id'=>$transaction->user_id,
                    'date'=>$transaction->date,
                    'time'=>$transaction->date
                ];
            }

    }
}
