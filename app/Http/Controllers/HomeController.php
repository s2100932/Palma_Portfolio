<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    // Home page shows profile
    public function index() {
        $profile = Home::first();

        return view('pages.home', compact('profile')); // home.blade.php = profile
    }
}
