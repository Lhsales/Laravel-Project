<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function Index()
    {
        return view('admin.index');
    }
}