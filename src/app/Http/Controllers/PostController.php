<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        $items = Post::with('user','like')->get();
        return response()->json([
            'data' => $items
        ], 200);
    }

    public function store(PostRequest $request)
    {
        $item = $request->all();
        $item['user_id'] =Auth::id();
        Post::create($item);
        return response()->json([
            'data' => $item
        ], 201);
    }

    public function show(Post $post)
    {
        $item = Post::where('id', $post->id)->with('user','like')->find($post);
        if ($item) {
            return response()->json([
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }

    public function destroy(Post $post)
    {
        $item = Post::where('id', $post->id)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
