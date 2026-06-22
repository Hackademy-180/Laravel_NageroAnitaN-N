<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('commenti.user', 'user', 'likers')->latest()->get();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('posts.index');
    }



    // Metodo nello store STORE, SALVA 1 NUOVO ELEMENTO
    //un utente, potrebbe avere molti post

}
