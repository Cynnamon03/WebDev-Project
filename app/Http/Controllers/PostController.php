<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
                    ->leftJoin('statuses', 'posts.status', '=', 'statuses.id')
                    ->select('posts.*', 'statuses.display_name as status_display_name', 'statuses.name as status_name')
                    ->get();

        $statuses = DB::table('statuses')->get();
        return view('post', compact('posts', 'statuses'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|exists:statuses,id',
        ]);

        Log::info('New Post Form Submitted:', $validatedData);

        DB::table('posts')->insert([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'created_by'=> 'JC',
            'created_at' => now(),
            'status' => $validatedData['status'],
        ]);

        return redirect()->route('post.index');
    }

    public function editForm($id)
    {
        $posts = DB::table('posts')->where('id', $id)->first();
        $statuses = DB::table('statuses')->get();

        if (!$posts) {
            return redirect()->route('post.index')->withErrors('Post not found.');
        }

        return view('edit-post', compact('posts', 'statuses'));
    }

    public function editSubmit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|exists:statuses,id',
        ]);

        Log::info('Edit Post Form Submitted for ID ' . $id, $validatedData);

        DB::table('posts')->where('id', $id)->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'updated_at' => now(), 
            'status' => $validatedData['status'],
        ]);

        return redirect()->route('post.index')->with('success', 'Post updated successfully!');
    }

    public function deletePost($id)
    {
        Log::info("Post ID {$id} was deleted.");

        DB::table('posts')->where('id', $id)->delete();
        return redirect()->route('post.index')->with('success', 'Post deleted successfully!');
    }

    public function searchPosts(Request $request)
    {
        $posts = DB::table('posts')->where('title', 'like', "%{$request->param}")->orwhere('description', 'like', "%{$request->param}")->get();
        $statuses = DB::table('statuses')->get();
        return view('post', compact('posts', 'statuses'));
    }
}

