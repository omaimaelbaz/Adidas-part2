<?php

namespace App\Http\Middleware;

use App\Models\permission;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     $publicRoutes=["/home","sigin","/signup","/login","/register"];
    //     $uri = $request->route()->uri;
    //     $role_id = 1;

    //     // if ($role_id) {
    //     //     $allowedRoutes = permission::where('role_id', $role_id)->get();
    //     //    foreach ($allowedRoutes as $route) {
    //     //         $allowedUri = $route->routes->name;
    //     //         if (count(explode('/', $uri)) > 2) {
    //     //             if (strstr($uri, $allowedUri))  return $next($request);
    //     //         } else {
    //     //             if ($uri === $allowedUri) return $next($request);
    //     //         }
    //     //     }
    //     //     return abort(401);
    //     // } else {

    //     //     if (in_array($uri, $publicRoutes)) return $next($request);
    //     //     else return abort(401);
    //     // }
    // }

}
