<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CalculateController extends Controller
{
    public function index($num1, $num2, Utils $utils)
    {
        Log::info('Calculate page accessed');
        $sum = $this->addNumbers($num1, $num2);
        $difference = $this->subtractNumbers($num1, $num2);
        $product = $utils->multiplyNumbers($num1, $num2);
        $quotient = $utils->divideNumbers($num1, $num2);
        return view('calculate', compact('num1', 'num2', 'sum', 'difference', 'product', 'quotient'));
    }

    public function addNumbers($param1, $param2)
    { 
        Log::info('Adding numbers');
        return $param1 + $param2;
    }

    private function subtractNumbers($param1, $param2)
    { 
        Log::info('Subtracting numbers');
        return $param1 - $param2;
    }
}