<?php

namespace App\Http\Middleware\EnsureExist;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Work;
use Redirect;

class EnsureWorkExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (is_numeric($request->route('work_id')) && is_numeric($request->route('experience_id')))
        {
            $work = Work::find($request->route('work_id'));
            if ($work)
            {
                if ($work->experience_id != $request->route('experience_id'))
                return Redirect::route('admin.experiences.index')
                               ->with('message', 'Dados inválidos para trabalho, acesse o trabalho via os menus: Experience > Edit > Works')
                               ->with('alert-class', 'warning');
                else 
                    return $next($request);
            }
            else
            {
                return Redirect::route('admin.experiences.edit', ['id' => $request->route('experience_id')])
                               ->with('message', 'Trabalho não encontrado!')
                               ->with('alert-class', 'warning');
            }
        }
        else 
            Redirect::route('admin.experiences.index');
    }
}
