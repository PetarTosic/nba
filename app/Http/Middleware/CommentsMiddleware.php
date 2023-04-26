<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CommentsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(str_contains(strtolower($request->content), "hate") || str_contains(strtolower($request->content), "idiot") || str_contains(strtolower($request->content), "stupid")) {
            return redirect('/forbidden');
        }
        return $next($request);
    }
}
