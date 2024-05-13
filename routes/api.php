<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Blogs

Route::get('/allBlogs','API\DataController@index');

Route::get('/showone/{id}','API\DataController@show');

Route::post('/delete','API\DataController@delete');

// Categories

Route::get('/allcategory','API\DataController@Category');

Route::get('/Showcategory/{id}','API\DataController@Showcategory');

Route::post('/deleteCategories','API\DataController@deleteCategories');


// Courses
Route::get('/allcourse','API\DataController@Course');

Route::get('/ShowCourse/{id}','API\DataController@ShowCourse');

Route::post('/deleteCourses','API\DataController@deleteCourses');

// CoursesFiles

Route::get('/allcourseFile','API\DataController@CourseFile');

Route::get('/ShowCourseFile/{id}','API\DataController@ShowCourseFile');

// CoursesRating

Route::get('/allcourseRating','API\DataController@CourseRating');

Route::get('/ShowCourseRating/{id}','API\DataController@ShowCourseRating');

// CoursesTaken

Route::get('/allcourseTaken','API\DataController@CourseTaken');

Route::get('/ShowCourseTaken/{id}','API\DataController@ShowCourseTaken');

// CoursesVideo

Route::get('/allcourseVideos','API\DataController@CourseVideos');

Route::get('/ShowCourseVideos/{id}','API\DataController@ShowCourseVideos');


// Credit

Route::get('/allCredit','API\DataController@Credit');

Route::get('/ShowCredit/{id}','API\DataController@Credit');


// InstructionLevels

Route::get('/allInstructionLevel','API\DataController@InstructionLevel');

Route::get('/ShowInstructionLevel/{id}','API\DataController@ShowInstructionLevel');

// Instructor

Route::get('/allinstructor','API\DataController@Instructor');


Route::get('/ShowInstructor/{id}','API\DataController@ShowInstructor');


// Role

Route::get('/allRoles','API\DataController@Role');


Route::get('/ShowRoles/{id}','API\DataController@ShowRoles');


// RoleUser

Route::get('/allRolesUser','API\DataController@RoleUser');


Route::get('/ShowRolesUser/{id}','API\DataController@ShowRolesUser');


// Transaction

Route::get('/allTransaction','API\DataController@Transaction');


Route::get('/ShowTransaction/{id}','API\DataController@ShowTransaction');


// User

Route::get('/allUser','API\DataController@User');


Route::get('/ShowUser/{id}','API\DataController@ShowUser');


// WithdrawRequest

Route::get('/allWithdrawRequest','API\DataController@WithdrawRequest');


Route::get('/ShowWithdrawRequest/{id}','API\DataController@ShowWithdrawRequest');