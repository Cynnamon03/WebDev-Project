<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AddUserController extends Controller
{
    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'  => ['required'],
            'middle_name' => ['nullable'],
            'last_name'   => ['required'],
            'email'       => ['required', 'email'],
            'password'    => ['required'],
        ], [
            'first_name.required' => 'First name is required.',
            'last_name.required'  => 'Last name is required.',
            'email.required'      => 'Email address is required.',
            'email.email'         => 'Please enter a valid email address.',
            'password.required'   => 'Password is required.',
        ]);

        $firstName = $request->input('first_name');
        $middleName = $request->input('middle_name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');
        $password = $request->input('password');
        
        Log::info('New Trainer Registration Attempt', [
            'first_name'  => $firstName,
            'middle_name' => $middleName,
            'last_name'   => $lastName,
            'email'       => $email,
            'password'    => '********'
        ]);

        $result = DB::table('users')->get();
        return $result;

        #return redirect()->route('home')->with('status', "Trainer {$firstName} {$lastName} successfully added!");
    }
}