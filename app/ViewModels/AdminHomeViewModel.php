<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class AdminHomeViewModel extends ViewModel
{
    public $experience_count;
    public $experience_active;
    public $scholarity_count;
    public $scholarityType_count;
    public $language_count;
    public $languageType_count;

    public function __construct()
    {
        //
    }
}
