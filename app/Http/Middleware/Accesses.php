<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Auth;
use Closure;
use App\Access;

class Accesses {
  public function handle(Request $request, Closure $next, String $name) {
    $role = $name;

    if (Auth::check()) {
      if ( Auth::user()->accesses->name == 'Full-Administrator' || Auth::user()->accesses->name == 'Administrator' || strpos($role, Auth::user()->accesses->name) != false ) {
        return $next($request);
      } else {
        return redirect('/dashboard')->with('error', 'Restrict Area!');
      }
    }
    else {
      return redirect(route('login'));
    }


  }
}
