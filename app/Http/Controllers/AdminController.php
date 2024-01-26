<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models;
use App\ViewModels\AdminHomeViewModel;
use Carbon\Carbon;

class AdminController extends Controller
{
    function Index()
    {
        $viewModel = new AdminHomeViewModel();

        $viewModel->experience_count = Models\Experience::all()->count();
        $viewModel->experience_active = Models\Experience::where('started_at', '<=', Carbon::now()->toDateTimeString())
                                                         ->where(function ($query){
                                                            $query->whereNull('ended_at')
                                                                  ->orWhere('ended_at', '>=', Carbon::now()->toDateTimeString());
                                                         })->count() ? true : false;
        $viewModel->scholarity_count = Models\Scholarity::all()->count();
        $viewModel->scholarityType_count = Models\ScholarityType::all()->count();
        $viewModel->language_count = Models\Language::all()->count();
        $viewModel->languageType_count = Models\LanguageType::all()->count();

        return view('admin.index', compact('viewModel'));
    }
}
