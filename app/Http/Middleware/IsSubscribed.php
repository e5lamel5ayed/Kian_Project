<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; // تغيير هنا
use App\Models\Course;

class IsSubscribed
{
    /**
     * 
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();
        $course_slug = $request->segment(2);
        
        $is_subscribed = Course::is_subscribed($course_slug, $user->id);
        
        if($is_subscribed)
                return $next($request);

        if ($request->isMethod('get')) { // تغيير هنا
            abort(401);
        } else if($request->isMethod('post')) { // تغيير هنا
            return redirect('/');
        }
    }
}
