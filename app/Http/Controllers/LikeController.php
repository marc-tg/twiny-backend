<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Validator;


class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $likes = Like::with(['user', 'post'])->get();
        return response()->json($likes);

        
    }
public function store($idUser, $idPost)
{
    $like = Like::create([
        'user_id' => $idUser,
        'post_id' => $idPost,
    ]);

    return response()->json($like, 201);
}


    /**
     * Display the specified resource.
     */
    public function show(string $idUser, string $idPost)
    {
       $like = Like::with(['user', 'post'])
        ->where('user_id', $idUser)
        ->where('post_id', $idPost)
        ->first();

    if (!$like) {
        return response()->json(['message' => 'Like not found'], 404);
    }

    return response()->json($like);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idUser, string $idPost)
    {
        $like = Like::where('user_id', $idUser)
            ->where('post_id', $idPost)
            ->first();
        $like->delete();
        return response()->json(['message' => 'Like deleted successfully']);

    }

    public function hasLike(string $idUser, string $idPost)
{
    $exists = Like::where('user_id', $idUser)
        ->where('post_id', $idPost)
        ->exists();

    return response()->json(['hasLike' => $exists]);
}

}
