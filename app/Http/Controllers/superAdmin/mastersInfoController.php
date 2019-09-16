<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\master;

class mastersInfoController extends Controller
{
    public function show(){
        $masters = master::all();
        return View('admin.masters.info',compact('masters'));
    }

    public function edit($id){
        $master = master::find($id);
        return view('admin.masters.edit',compact(['master']));
    }

    public function update(Request $request , $id){

    }
}
