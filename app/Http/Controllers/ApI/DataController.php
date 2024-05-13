<?php

namespace App\Http\Controllers\ApI;

use App\Models\CourseFiles;
use App\Models\CourseRating;
use App\Models\CourseTaken;
use App\Models\CourseVideos;
use App\Models\InstructionLevel;
use App\Models\RoleUser;
use App\Models\WithdrawRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;

use App\Models\Course;
use App\Models\Credit;
use App\Models\Instructor;
use App\Models\Role;
use App\Models\Transaction;
use App\Models\User;
use PackageVersions\Installer;


class DataController extends Controller
{

    // Blogs

    // AllData
    function index(){
        $Blog = Blog::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Blog

        ];
        return response()->json($data);
    }

    //ShowOne

    function show($id){
        $Blog = Blog::find($id);

        
        $data = [
            "msg" => "Return One Record",
            "Statud" => 200,
            "data" =>  $Blog

        ];
        return response()->json($data);
    }

    //Delete

    function delete(Request $request){
        $id = $request->id;
        $Blog = Blog::find($id);

        if($Blog){

            $Blog->delete();
        
            $data = [
                "msg" => "Deleted Successfully",
                "Statud" => 200,
                "data" =>  null
    
            ];
            return response()->json($data);

        }else{
           
        
            $data = [
                "msg" => "No Such Id",
                "Statud" => 205,
                "data" =>  null
    
            ];
            return response()->json($data);
        }
       
    }



    // Categories

    function Category(){
        $Category = Category::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Category

        ];
        return response()->json($data);
    }

    function Showcategory($id){
        $Category = Category::find($id);

        
        $data = [
            "msg" => "Return One Record",
            "Statud" => 200,
            "data" =>  $Category

        ];
        return response()->json($data);
    }

     //Delete

     function deleteCategories(Request $request){
        $id = $request->id;
        $Category = Category::find($id);

        if($Category){

            $Category->delete();
        
            $data = [
                "msg" => "Deleted Successfully",
                "Statud" => 200,
                "data" =>  null
    
            ];
            return response()->json($data);

        }else{
           
        
            $data = [
                "msg" => "No Such Id",
                "Statud" => 205,
                "data" =>  null
    
            ];
            return response()->json($data);
        }
       
    }

  
    // Courses

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

     //Delete

     function deleteCourses(Request $request){
        $id = $request->id;
        $Courses = Course::find($id);

        if($Courses){

            $Courses->delete();
        
            $data = [
                "msg" => "Deleted Successfully",
                "Statud" => 200,
                "data" =>  null
    
            ];
            return response()->json($data);

        }else{
           
        
            $data = [
                "msg" => "No Such Id",
                "Statud" => 205,
                "data" =>  null
    
            ];
            return response()->json($data);
        }
       
    }



    // CoursesFiles
    function CourseFile(){
        $CourseFile = CourseFiles::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseFile

        ];
        return response()->json($data);
    }

    function ShowCourseFile($id){
        $CourseFile = CourseFiles::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseFile

        ];
        return response()->json($data);
    }

    // CoursesRating
    function CourseRating(){
        $CourseRating = CourseRating::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseRating

        ];
        return response()->json($data);
    }

    function ShowCourseRating($id){
        $CourseRating = CourseRating::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseRating

        ];
        return response()->json($data);
    }

       // CoursesTaken
       function CourseTaken(){
        $CourseTaken = CourseTaken::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseTaken

        ];
        return response()->json($data);
    }

    function ShowCourseTaken($id){
        $CourseTaken = CourseTaken::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseTaken

        ];
        return response()->json($data);
    }


        // CoursesVideos
        function CourseVideos(){
            $CourseVideos = CourseVideos::all();
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $CourseVideos
    
            ];
            return response()->json($data);
        }
    
        function ShowCourseVideos($id){
            $CourseVideos = CourseVideos::find($id);
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $CourseVideos
    
            ];
            return response()->json($data);
        }


         // Credit
         function Credit(){
            $Credit = Credit::all();
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $Credit
    
            ];
            return response()->json($data);
        }
    
        function ShowCredit($id){
            $Credit = Credit::find($id);
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $Credit
    
            ];
            return response()->json($data);
        }


           // InstructionLevels
           function InstructionLevel(){
            $InstructionLevel = InstructionLevel::all();
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $InstructionLevel
    
            ];
            return response()->json($data);
        }

        function ShowInstructionLevel($id){
            $InstructionLevel = InstructionLevel::find($id);
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $InstructionLevel
    
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


    function ShowInstructor ($id){
        $Instructor =Instructor::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Instructor

        ];
        return response()->json($data);
    }


       //Roles

       function Role (){
        $Role =Role::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Role

        ];
        return response()->json($data);
    }


    function ShowRoles ($id){
        $Role =Role::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Role

        ];
        return response()->json($data);
    }


        //RolesUser

        function RoleUser (){
            $RoleUser =RoleUser::all();
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $RoleUser
    
            ];
            return response()->json($data);
        }
    
    
        function ShowRolesUser ($id){
            $RoleUser =RoleUser::find($id);
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $RoleUser
    
            ];
            return response()->json($data);
        }
    
          //Transaction

          function Transaction (){
            $Transaction =Transaction::all();
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $Transaction
    
            ];
            return response()->json($data);
        }
    
    
        function ShowTransaction ($id){
            $Transaction =Transaction::find($id);
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $Transaction
    
            ];
            return response()->json($data);
        }

          //User

          function User (){
            $User =User::all();
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $User
            ];
            return response()->json($data);
        }
    
    
        function ShowUser ($id){
            $User =User::find($id);
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $User
    
            ];
            return response()->json($data);
        }


           //WithdrawRequest

           function WithdrawRequest (){
            $WithdrawRequest =WithdrawRequest::all();
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $WithdrawRequest
            ];
            return response()->json($data);
        }
    
    
        function ShowWithdrawRequest ($id){
            $WithdrawRequest =WithdrawRequest::find($id);
            $data = [
                "msg" => "Return All Data",
                "Statud" => 200,
                "data" => $WithdrawRequest
    
            ];
            return response()->json($data);
        }

}
