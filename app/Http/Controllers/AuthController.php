<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;

class AuthController extends Controller
{
    function Index()
    {
        return view('auth.index');
    }

    function Login(Request $req)
    {
        $data = $req->all();

        if (Auth::attempt(['email' => $req['email'], 'password' => $req['password']]))
        {

            return Redirect::route('home')
                           ->with('message', 'Login efetuado com sucesso!')
                           ->with('alert-class', 'success');
        }
        else 
        {
            Session::flash('message', 'E-mail ou senha incorreto(s)!');
            Session::flash('alert-class', 'danger');
            
            return view('auth.index');
        }
    }
}
