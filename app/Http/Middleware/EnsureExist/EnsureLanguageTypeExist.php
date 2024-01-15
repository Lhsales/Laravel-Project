<?php

namespace App\Http\Middleware\EnsureExist;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\LanguageType;

use Redirect;

class EnsureLanguageTypeExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (LanguageType::find($request->route('id')))
            return $next($request);
        else
        {
            return Redirect::route('admin.languages.types.index')
                           ->with('message', 'Tipo de Linguagem não encontrado!')
                           ->with('alert-class', 'warning');
        }
    }
}
