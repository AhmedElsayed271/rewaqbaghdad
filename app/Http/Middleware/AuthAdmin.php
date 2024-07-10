<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$rol=null)
    {
        $AuthAdmin = auth('admin');

        if( $AuthAdmin->check() )
        {   
            if ( empty($AuthAdmin->user()->group_id) || $AuthAdmin->user()->group->$rol != 'on') :
                return redirect('/admin/403?url='.$request->url())->with('error', __('global.alert_error_403'));
            endif;
            return $next($request);
        }
        return redirect('/admin/auth');
    }
}
