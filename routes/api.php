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

Route::get('/alldata','API\DataController@index');

Route::get('/showone/{id}','API\DataController@show');

Route::get('/allcourse','API\DataController@Course');

Route::get('/ShowCourse/{id}','API\DataController@ShowCourse');


Route::get('/allinstructor','API\DataController@Instructor');


Route::get('/ShowInstructor/{id}','API\DataController@ShowInstructor');
