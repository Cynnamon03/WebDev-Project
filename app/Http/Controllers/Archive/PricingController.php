<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PricingController extends Controller
{
    public function index()
    {
        Log::info('Pricing page accessed');
        return view('pricing');
    }
}
