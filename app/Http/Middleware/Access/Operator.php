<?php

namespace App\Http\Middleware\Access;

use Closure;
use App\Access;
use Auth;

class Operator {
  public function handle($request, Closure $next) {
    if ( Auth::user()->accesses->name != 'Operator' ) {
      return redirect('/dashboard')->with('error', 'Restrict Area!');
    }

    return $next($request);
  }
}
