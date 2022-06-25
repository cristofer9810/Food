<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSettingsController extends Controller
{
    public function configure_user_profile()
    {
        return view('configure_user_profile');
    }

    public function index()
    {
        return view('map');
    }
}
