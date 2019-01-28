<?php

namespace App\Http\Middleware;

use Closure;

class CheckName
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
        if(request()->has('writer_name'))
        {
            if (request('writer_name') == 'ali')
            {
                return redirect('error');
            }else
                {
                return redirect('/');
            }
        }
        return $next($request);
    }
}
