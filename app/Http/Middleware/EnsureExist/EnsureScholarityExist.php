<?php

namespace App\Http\Middleware\EnsureExist;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Scholarity;

use Redirect;

class EnsureScholarityExist
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
            if (Scholarity::find($request->route('id')))
                return $next($request);
            else
            {
                return Redirect::route('admin.scholarity.index')
                               ->with('message', 'Escolaridade não encontrada!')
                               ->with('alert-class', 'warning');
            }
        }
        else 
            Redirect::route('admin.scholarity.index');
    }
}
