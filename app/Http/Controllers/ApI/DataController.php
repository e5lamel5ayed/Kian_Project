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
use App\http\Resources\BlogResource;
use App\http\Resources\CategoryResource;
use PackageVersions\Installer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Response;
use App\Http\Resources\CourseResource;
// use App\Models\CourseFiles;
use App\Http\Resources\CourseFileResource;
use App\Http\Resources\CourseRatingsResource;
use App\Http\Resources\CourseVideosResource;
use App\Http\Resources\InstructorResource;
use App\Http\Resources\RoleResource;
use App\Http\Resources\RoleUserResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\WithdrawRequestResource;


class DataController extends Controller
{

    // Blogs

    // AllData
    function index()
    {
        $Blog = Blog::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Blog

        ];
        return response()->json($data);
    }

    //ShowOne

    function show($id)
    {
        $Blog = Blog::find($id);


        $data = [
            "msg" => "Return One Record",
            "Statud" => 200,
            "data" =>  $Blog

        ];
        return response()->json($data);
    }

    //Delete

    function delete(Request $request)
    {
        $id = $request->id;
        $Blog = Blog::find($id);

        if ($Blog) {

            $Blog->delete();

            $data = [
                "msg" => "Deleted Successfully",
                "Statud" => 200,
                "data" =>  null

            ];
            return response()->json($data);
        } else {


            $data = [
                "msg" => "No Such Id",
                "Statud" => 205,
                "data" =>  null

            ];
            return response()->json($data);
        }
    }



    function CreateBlog(Request $request)
    {
        $newDataa = Blog::create([
            "id" => $request->id,
            "blog_title" => $request->blog_title,
            "blog_slug" => $request->blog_slug,
            "blog_image" => $request->blog_image,
            "description" => $request->description,
            "is_active" => $request->is_active,
        ]);

        $data = [
            "msg" => "Created successfully",
            "status" => 200,
            "data" => new BlogResource($newDataa)
        ];
        return response()->json($data);
    }


    public function update(Request $request)
    {
        $old_id = $request->old_id;
        $blog = Blog::find($old_id);

        if ($blog) {
            $validatedData = $request->validate([
                'blog_title' => 'required|string|max:255',
                'blog_slug' => 'required|string|max:255|unique:blogs,blog_slug,' . $old_id,
                'blog_image' => 'nullable|string',
                'description' => 'nullable|string',
                'is_active' => 'required|boolean',
            ]);

            $blog->update($validatedData);

            return response()->json([
                "msg" => "Updated successfully",
                "status" => 200,
                "data" => new BlogResource($blog)
            ]);
        } else {
            return response()->json([
                "msg" => "No such Id",
                "status" => 404,
                "data" => null
            ]);
        }
    }
    // ============================

    function Category()
    {
        $Category = Category::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Category

        ];
        return response()->json($data);
    }

    function Showcategory($id)
    {
        $Category = Category::find($id);


        $data = [
            "msg" => "Return One Record",
            "Statud" => 200,
            "data" =>  $Category

        ];
        return response()->json($data);
    }

    function CreateCategory(Request $request)
    {
        $newData = Category::create([
            "id" => $request->id,
            "name" => $request->name,
            "slug" => $request->slug,
            "icon_class" => $request->icon_class,
            "is_active" => $request->is_active,
        ]);

        $data = [
            "msg" => "Created successfully",
            "status" => 200,
            "data" => new CategoryResource($newData)
        ];
        return response()->json($data);
    }



    //Delete

    function deleteCategories(Request $request)
    {
        $id = $request->id;
        $Category = Category::find($id);

        if ($Category) {

            $Category->delete();

            $data = [
                "msg" => "Deleted Successfully",
                "Statud" => 200,
                "data" =>  null

            ];
            return response()->json($data);
        } else {


            $data = [
                "msg" => "No Such Id",
                "Statud" => 205,
                "data" =>  null

            ];
            return response()->json($data);
        }
    }


    // Courses

    function Course()
    {
        $Course = Course::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Course

        ];
        return response()->json($data);
    }

    function ShowCourse($id)
    {
        $Course = Course::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Course

        ];
        return response()->json($data);
    }

    //Delete

    function deleteCourses(Request $request)
    {
        $id = $request->id;
        $Courses = Course::find($id);

        if ($Courses) {

            $Courses->delete();

            $data = [
                "msg" => "Deleted Successfully",
                "Statud" => 200,
                "data" =>  null

            ];
            return response()->json($data);
        } else {


            $data = [
                "msg" => "No Such Id",
                "Statud" => 205,
                "data" =>  null

            ];
            return response()->json($data);
        }
    }

    //create

    public function createCourse(Request $request)
    {
        $newCourse = Course::create([
            'instructor_id' => $request->instructor_id,
            'category_id' => $request->category_id,
            'instruction_level_id' => $request->instruction_level_id,
            'course_title' => $request->course_title,
            'course_slug' => $request->course_slug,
            'keywords' => $request->keywords,
            'overview' => $request->overview,
            'course_image' => $request->course_image,
            'thumb_image' => $request->thumb_image,
            'course_video' => $request->course_video,
            'duration' => $request->duration,
            'price' => $request->price,
            'strike_out_price' => $request->strike_out_price,
            'is_active' => $request->is_active,
        ]);

        $data = [
            'msg' => 'Course created successfully',
            'status' => 200,
            'data' => new CourseResource($newCourse)
        ];

        return response()->json($data);
    }


    // CoursesFiles
    function CourseFile()
    {
        $CourseFile = CourseFiles::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseFile

        ];
        return response()->json($data);
    }

    function ShowCourseFile($id)
    {
        $CourseFile = CourseFiles::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseFile

        ];
        return response()->json($data);
    }


    //create

    
    public function createCourseFile(Request $request)
    {
        $newFile = CourseFiles::create([
            'file_name' => $request->file_name,
            'file_title' => $request->file_title,
            'file_type' => $request->file_type,
            'file_extension' => $request->file_extension,
            'file_size' => $request->file_size,
            'duration' => $request->duration,
            'file_tag' => $request->file_tag,
            'uploader_id' => $request->uploader_id,
            'processed' => $request->processed,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ]);

        $data = [
            'msg' => 'Course file created successfully',
            'status' => 200,
            'data' => new CourseFileResource($newFile)
        ];

        return response()->json($data);
    }



    // CoursesRating
    function CourseRating()
    {
        $CourseRating = CourseRating::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseRating

        ];
        return response()->json($data);
    }

    function ShowCourseRating($id)
    {
        $CourseRating = CourseRating::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseRating

        ];
        return response()->json($data);
    }

    public function createCourseRating(Request $request)
    {
        $newRating = CourseRating::create([
            'user_id' => $request->user_id,
            'course_id' => $request->course_id,
            'rating' => $request->rating,
            'comments' => $request->comments,
        ]);

        $data = [
            'msg' => 'Course rating created successfully',
            'status' => 200,
            'data' => new CourseRatingsResource($newRating)
        ];

        return response()->json($data);
    }

    // CoursesTaken
    function CourseTaken()
    {
        $CourseTaken = CourseTaken::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseTaken

        ];
        return response()->json($data);
    }

    function ShowCourseTaken($id)
    {
        $CourseTaken = CourseTaken::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseTaken

        ];
        return response()->json($data);
    }


    // CoursesVideos
    function CourseVideos()
    {
        $CourseVideos = CourseVideos::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseVideos

        ];
        return response()->json($data);
    }

    function ShowCourseVideos($id)
    {
        $CourseVideos = CourseVideos::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $CourseVideos

        ];
        return response()->json($data);
    }

    public function createCourseVideo(Request $request)
    {
        $newVideo = CourseVideos::create([
            'video_title' => $request->video_title,
            'video_name' => $request->video_name,
            'video_type' => $request->video_type,
            'duration' => $request->duration,
            'image_name' => $request->image_name,
            'video_tag' => $request->video_tag,
            'uploader_id' => $request->uploader_id,
            'course_id' => $request->course_id,
            'processed' => $request->processed,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ]);

        $data = [
            'msg' => 'Course video created successfully',
            'status' => 200,
            'data' => new CourseVideosResource($newVideo)
        ];

        return response()->json($data);
    }


    // Credit
    function Credit()
    {
        $Credit = Credit::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Credit

        ];
        return response()->json($data);
    }

    function ShowCredit($id)
    {
        $Credit = Credit::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Credit

        ];
        return response()->json($data);
    }



    // InstructionLevels
    function InstructionLevel()
    {
        $InstructionLevel = InstructionLevel::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $InstructionLevel

        ];
        return response()->json($data);
    }

    function ShowInstructionLevel($id)
    {
        $InstructionLevel = InstructionLevel::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $InstructionLevel

        ];
        return response()->json($data);
    }


    //Instructor

    function Instructor()
    {
        $Instructor = Instructor::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Instructor

        ];
        return response()->json($data);
    }


    function ShowInstructor($id)
    {
        $Instructor = Instructor::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Instructor

        ];
        return response()->json($data);
    }


    public function createInstructor(Request $request)
    {
        $newInstructor = Instructor::create([
            'user_id' => $request->user_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'instructor_slug' => $request->instructor_slug,
            'contact_email' => $request->contact_email,
            'telephone' => $request->telephone,
            'mobile' => $request->mobile,
            'paypal_id' => $request->paypal_id,
            'link_facebook' => $request->link_facebook,
            'link_linkedin' => $request->link_linkedin,
            'link_twitter' => $request->link_twitter,
            'link_googleplus' => $request->link_googleplus,
            'biography' => $request->biography,
            'instructor_image' => $request->instructor_image,
            'total_credits' => $request->total_credits,
        ]);

        $data = [
            'msg' => 'Instructor created successfully',
            'status' => 200,
            'data' => new InstructorResource($newInstructor)
        ];

        return response()->json($data);
    }

    //Roles

    function Role()
    {
        $Role = Role::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Role

        ];
        return response()->json($data);
    }


    function ShowRoles($id)
    {
        $Role = Role::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Role

        ];
        return response()->json($data);
    }

    public function createRole(Request $request)
    {
        $newRole = Role::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        $data = [
            'msg' => 'Role created successfully',
            'status' => 200,
            'data' => new RoleResource($newRole)
        ];

        return response()->json($data);
    }

    //RolesUser

    function RoleUser()
    {
        $RoleUser = RoleUser::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $RoleUser

        ];
        return response()->json($data);
    }


    function ShowRolesUser($id)
    {
        $RoleUser = RoleUser::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $RoleUser

        ];
        return response()->json($data);
    }

    public function createRoleUser(Request $request)
    {
        $newRole = RoleUser::create([
            'role_id' => $request->role_id,
            'user_id' => $request->user_id,
        ]);

        $data = [
            'msg' => 'RoleUser created successfully',
            'status' => 200,
            'data' => new RoleUserResource($newRole)
        ];

        return response()->json($data);
    }

    //Transaction

    function Transaction()
    {
        $Transaction = Transaction::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Transaction

        ];
        return response()->json($data);
    }


    function ShowTransaction($id)
    {
        $Transaction = Transaction::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $Transaction

        ];
        return response()->json($data);
    }

    //User

    function User()
    {
        $User = User::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $User
        ];
        return response()->json($data);
    }


    function ShowUser($id)
    {
        $User = User::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $User

        ];
        return response()->json($data);
    }


    public function createUser(Request $request)
    {
        $newUser = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Ensure to hash the password
            'is_active' => $request->is_active ?? 1, // Default to active if not provided
        ]);

        $data = [
            'msg' => 'User created successfully',
            'status' => 200,
            'data' => new UserResource($newUser),
        ];

        return response()->json($data);
    }

    //WithdrawRequest

    function WithdrawRequest()
    {
        $WithdrawRequest = WithdrawRequest::all();
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $WithdrawRequest
        ];
        return response()->json($data);
    }


    function ShowWithdrawRequest($id)
    {
        $WithdrawRequest = WithdrawRequest::find($id);
        $data = [
            "msg" => "Return All Data",
            "Statud" => 200,
            "data" => $WithdrawRequest

        ];
        return response()->json($data);
    }
}


function createWithdrawRequest(Request $request)
{
    $newWithdrawRequest = WithdrawRequest::create([
        'instructor_id' => $request->instructor_id,
        'paypal_id' => $request->paypal_id,
        'amount' => $request->amount,
        'status' => $request->status, 
    ]);

    $data = [
        "msg" => "Withdraw request created successfully",
        "status" => 200,
        "data" => new WithdrawRequestResource($newWithdrawRequest)
    ];

    return response()->json($data);
}
