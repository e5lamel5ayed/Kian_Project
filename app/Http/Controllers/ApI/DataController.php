<?php

namespace App\Http\Controllers\ApI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Instructor;
use PackageVersions\Installer;

class DataController extends Controller
{
    function index(){
        $Blog = Blog::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Blog

        ];
        return response()->json($data);
    }

    function show($id){
        $Blog = Blog::find($id);

        
        $data = [
            "msg" => "Return One Record",
            "Statud" => 200,
            "data" =>  $Blog

        ];
        return response()->json($data);
    }

    function Course(){
        $Course = Course::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Course

        ];
        return response()->json($data);
    }

    function ShowCourse($id){
        $Course = Course::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Course

        ];
        return response()->json($data);
    }


  
        
  
    //Instructor

    function Instructor (){
        $Instructor =Instructor::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Instructor

        ];
        return response()->json($data);
    }

    //ShowInstructor

    function ShowInstructor ($id){
        $Instructor =Instructor::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Instructor

        ];
        return response()->json($data);
    }


}
