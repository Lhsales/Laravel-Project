<?php

namespace App\Http\Middleware\EnsureExist;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Language;

use Redirect;

class EnsureLanguageExist
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
            if (Language::find($request->route('id')))
                return $next($request);
            else
            {
                return Redirect::route('admin.languages.index')
                               ->with('message', 'Linguagem não encontrada!')
                               ->with('alert-class', 'warning');
            }
        }
        else
            return Redirect::route('admin.languages.index');        
    }
}
