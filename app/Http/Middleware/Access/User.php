<?php

namespace App\Http\Middleware\Access;

use Closure;
use App\Access;
use Auth;

class User {
  public function handle($request, Closure $next) {
    if ( Auth::user()->accesses->name != 'User' ) {
      return redirect('/dashboard')->with('error', 'Restrict Area!');
    }

    return $next($request);
  }
}
