<?php

namespace App\Http\Middleware\EnsureExist;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\ScholarityType;

use Redirect;

class EnsureScholarityTypeExist
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
            if (ScholarityType::find($request->route('id')))
                return $next($request);
            else
            {
                return Redirect::route('admin.scholarity.types.index')
                               ->with('message', 'Tipo de Escolaridade não encontrado!')
                               ->with('alert-class', 'warning');
            }
        }
        else 
            Redirect::route('admin.scholarity.types.index');
    }
}
