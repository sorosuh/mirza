<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['namespace' => 'api'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::group(['namespace' => 'user'], function () {
            Route::post('register', 'registerController@register');
            Route::post('login',  'loginController@login');
            Route::post('question/{id}', 'questionsController@show');
            Route::post('classroom/{id}', 'classroomsController@show');
            Route::post('contact/{id}', 'contactsController@show');
            Route::post('transaction/{id}', 'transactionsController@show');
        });
    });
});
Route::group(['namespace' => 'api'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['namespace' => 'admin'], function () {
            Route::post('question', 'questionsManagmentController@create');
            Route::post('editQuestionPrice/{id}', 'questionsManagmentController@editPrice');
            Route::post('editQuestion/{id}', 'questionsManagmentController@editQuestion');
            Route::post('deleteQuestion/{id}', 'questionsManagmentController@deleteQuestion');
            Route::post('createClass', 'classroomsManagmentController@createClassroom');
            Route::post('showQuestions', 'questionsManagmentController@showQuestions');
            Route::post('editClass/{id}', 'classroomsManagmentController@editClass');
            Route::post('showStudents', 'studentManagmentController@show');
            Route::post('editStudents/{id}', 'studentManagmentController@editStudent');

            Route::post('upload', 'questionsManagmentController@uploadQuestion');
        });
    });
});

