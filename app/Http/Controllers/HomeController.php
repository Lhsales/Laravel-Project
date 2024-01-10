<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Index()
    {
        return view('home');
    }
    function Experiences()
    {
        return view('experiences');
    }
    function Knowledges()
    {
        return view('knowledges');
    }
}
