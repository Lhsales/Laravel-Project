<?php

namespace App\Http\Middleware\EnsureExist;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Experience;
use Redirect;

class EnsureExperienceExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (is_numeric($request->route('id')))
        {
            if (Experience::find($request->route('id')))
                return $next($request);
            else
            {
                return Redirect::route('admin.experiences.index')
                               ->with('message', 'Experiência não encontrada!')
                               ->with('alert-class', 'warning');
            }
        }
        else 
            return Redirect::route('admin.experiences.index');
    }
}
