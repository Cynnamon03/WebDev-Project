<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AboutController extends Controller
{
    public function index()
    {
        Log::info('About page accessed');
        return view('about');
    
    }
}