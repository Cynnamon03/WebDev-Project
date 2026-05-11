<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    public function welcome()
    {
        Log::info('Welcome page accessed');
        return view('welcome');
    }

    public function about()
    {
        Log::info('Trainer Profile (About) accessed');
        return view('about');
    }

    public function pricing()
    {
        Log::info('Disguise Tiers (Pricing) accessed');
        return view('pricing');
    }
}