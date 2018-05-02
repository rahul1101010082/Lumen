<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
        $reponse->header('Access-Control-Allow-Methods' , 'HEAD , GET , POST , PATCH ,DELETE');
        $reponse->header('Access-Control-Allow-Headers' , $request->header('Access-Control-Allow-Headers'));
        $reponse->header('Access-Control-Allow-Origin' , 'Content-Type');
        $reponse->header('Access-Control-Allow-Origin' , '*');
        return $reponse;
    }
}
