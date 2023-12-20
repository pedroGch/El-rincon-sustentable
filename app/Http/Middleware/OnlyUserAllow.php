<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlyUserAllow
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      // chequea que el rol del usuario sea 'user'

      $user = $request->user();

      if ($user->rol != 'user')
      {
        return back()->with('status.message', 'Los administradores no pueden acceder a páginas exclusivas para usuarios.')
        ->with('status.type', 'danger')
        ->with('status.svg', 'M17.293 6.293a1 1 0 0 0-1.414-1.414L12 10.586 7.707 6.293a1 1 0 0 0-1.414 1.414L10.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414L12 13.414l4.293 4.293a1 1 0 0 0 1.414-1.414L13.414 12l4.293-4.293z')
        ->withInput();
      }

        return $next($request);
    }
}
