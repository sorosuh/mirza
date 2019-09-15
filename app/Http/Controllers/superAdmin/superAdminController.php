<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\editUserRequest;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class superAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::all();
        return View('admin.users.index',compact(['students']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrfail($id);
        return View('admin.users.edit',compact(['user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(editUserRequest $request,$id)
    {
         $user = User::find($id);
         $user = User::findOrfail($id);
         $user->name = $request->name;
         $user->family = $request->family;
         $user->major = $request->major;
         $user->phone = $request->phone;
         $user->email = $request->email;
         $user->password =bcrypt( $request->password);
         $user->save();
         Session::flash('update_user', 'کاربر با موفقیت ویرایش شد');
         return redirect('/mirza%28main%29/mirza/public/superAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = find($id);
        $user->delete();
        Session::flash('delete_user', 'کاربر با موفقیت حذف شد');
        return Redirect('superAdmin');

    }
}
