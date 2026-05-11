<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('post', compact('posts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Log::info('New Post Form Submitted:', $validatedData);

        $result = DB::table('posts')->get();
        return response()->json($result, 200, [], JSON_PRETTY_PRINT);
    }
}