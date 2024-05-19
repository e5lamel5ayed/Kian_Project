<?php

namespace App\Http\Middleware;

use Closure;
// use Auth;
// use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        foreach($roles as $role) {
            // Check if user has the role This check will depend on how your roles are set up
            if($user->hasRole($role))
                return $next($request);
        }
        
        if (request::isMethod('get')) {
            abort(401);
        } else if(request::isMethod('post')) {
            return redirect('/');
        }

        
    }
}
