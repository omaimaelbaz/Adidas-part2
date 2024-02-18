<?php

namespace App\Http\Middleware;

use App\Models\permission as ModelsPermission;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $uri = $request->path();
        $role_id = session('role_id');
        //    dd($role_id);
        if(isset($role_id))
        {
            $Role_Permission = ModelsPermission::where('role_id', $role_id);
            // dd($Role_Permission);                                                                                 

            foreach($Role_Permission as $permission)
            {
                if(count(explode('/', $uri)) > 2)
                {
                    if(strstr($uri, $permission->name)) {
                        return $next($request);
                    }


                }
                else
                {
                    dd($uri);
                    if(($uri==$permission->name)) return $next($request);
                }

            }
            return abort(404);


        }



        return $next($request);
    }

}
