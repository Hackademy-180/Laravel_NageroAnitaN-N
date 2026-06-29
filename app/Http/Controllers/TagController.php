<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Tag;
class TagController extends Controller
{
    //



        public function index(){

    $tags= Tag::all();

    return view('tags.index', compact('tags'));
    }



public  function  create()
{
    return view('tags.create');

}



public function store(Request $request)
{
    
Tag::create($request->only('name'));

return redirect()->route('tags.index');
}


// METODO DESTROY SERVE AD ELIMINARE , I TAG in questo caso, 
public function destroy(Tag $tag)
{
    // stacca la relazione con gli articoli
    $tag->articles()->detach();

    // elimina il tag
    $tag->delete();

    return redirect()->route('tags.index');
}




}
