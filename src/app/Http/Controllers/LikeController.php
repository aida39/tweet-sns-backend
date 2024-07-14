<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{

    public function store(Request $request)
    {
        $item = Like::create($request->all());
        return response()->json([
            'like' => $item
        ], 201);
    }

    public function destroy(Like $id)
    {
        $item = Like::where('id', $id->id)->delete();
        return response()->json([
            'message' => 'Like deleted successfully'
        ], 200);
    }

}
