<?php

namespace App\Http\Middleware;

use App\Models\enroll_comps;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class usercomp
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    if(Auth::check()){
     // Get competition ID from URL
        $competition_id = $request->route('id');

        // Check whether this user is enrolled in this competition
        $enrollment = enroll_comps::where('user_id', Auth::id())
            ->where('competition_id', $competition_id)
            ->first();

               if(!$enrollment){
        return redirect()->route('allcomp');
    }
    else{
          return $next($request);
    }
    }
else{
       return redirect()->route('loginform');
}
}
}
