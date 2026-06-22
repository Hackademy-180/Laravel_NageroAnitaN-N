<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;





class LikeController extends Controller
{
    //many to many è la relazione; inserzione del like





    public function toggle(Post $post)
    {
        $post->likers()->toggle(Auth::id());
        return back();
    }





    }
