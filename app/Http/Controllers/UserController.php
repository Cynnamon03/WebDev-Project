<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function home()
    {
        Log::info('Home page accessed');
        return view('home');
    }

    public function show($id, $name)
    {
        Log::info('User page accessed');
        return view('user.show', compact('id', 'name'));
    }

    public function edit($id, $name)
    {
        Log::info('Edit page accessed');
        return view('user.edit', compact('id', 'name'));
    }

    public function remove()
    {
        Log::info('Profile removed');
        return redirect()->route('home')->with('status', 'Profile successfully removed!');
    }
}