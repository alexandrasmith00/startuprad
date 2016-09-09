<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware {

  public function handle($request, Closure $next, $guard = null)
  {
    if (Auth::guard($guard)->guest()) {
      if ($request->ajax()) {
        return response('Unauthorized.', 401);
      } else {
        return redirect()->guest('login');
      }
    } else if (! $request->user()->hasRole('Admin'))  {
      return redirect('/');
    }

    return $next($request);
  }

}
