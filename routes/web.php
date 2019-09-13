<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\classroom;
use App\masster;
use App\master;
use App\question;
use App\User;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('test',function(){
//     $user = User::find(1);
//     foreach ($user->questions as $q) {
//         return $q;
//     }
// });

// Route::get('test2',function(){
//     $user = User::find(2);
//     foreach ($user->contacts as $q) {
//         return $q;
//     }
// });

// Route::get('test3',function(){
//     $master = master::find(1);
//     foreach ($master->questions as $question) {
//         echo $question;
//     }
// });

// Route::get('test4',function(){
//     $User = User::find(6);
//     foreach ($User->masters as $master) {
//         echo $master;
//     }
// });

Route::resource('superAdmin', 'superAdmin\superAdminController');
