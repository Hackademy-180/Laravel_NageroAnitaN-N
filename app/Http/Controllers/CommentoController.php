<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commento;
use Illuminate\Support\Facades\Auth;





class CommentoController extends Controller
{
    //
    public function store(Request $request)
    {

        $request->validate([
            'testo'   => 'required|min:2|max:1000',
            'post_id' => 'required|exists:posts,id',
        ]);

        Commento::create([
            'testo' => $request->testo,
            'user_id' => Auth::id(),
            'post_id' => $request->post_id
        ]);

        return back();
    }
}
