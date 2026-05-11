<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Utils extends Controller
{
    public function multiplyNumbers($param1, $param2)
    { 
        Log::info('Multiplying numbers');
        return $param1 * $param2;
    }

    public function divideNumbers($param1, $param2)
    { 
        Log::info('Dividing numbers');
        try {
            if ($param2 == 0) {
                throw new \InvalidArgumentException("Division by zero is not allowed.");
            }
        } catch (\InvalidArgumentException $e) {
            return $e->getMessage();
        }

        return $param1 / $param2;
    }
}
