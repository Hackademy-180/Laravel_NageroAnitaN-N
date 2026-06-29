<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Tag;
class ArticleController extends Controller
{
    //FUNZIONI PER CONTENERE TIPI DI DATI SENSIBILI, ASSOCIATE AD UNA CLASSE IN QUESTO CASO ED A 1 OGGETTO; SON ALL'INTERNO DI QUALCOSA DUNQUE;
    //NELLA RELAZIONI MAPPO LE ISTANZE, 

    // METODO INDEX

    public function index(){

    $articles= Article::with('tags')->get();

    return view('articles.index', compact('articles'));
    }


// METODO CREATE

public function create()


{

    $tags = Tag::all();
    return view('articles.create', compact('tags'));


}


// METODO STORE, creare e salvare articolo
public function store(Request $request)


{

    $article = Article::create($request->only('title','content'));

    $article->tags()->attach($request->tags);


    // CREARE TAG DAL FORM CON UN INPUT TEXT
    if ($request->tag_name) {
        $tag = Tag::create(['name' => $request->tag_name]);
        $article->tags()->attach($tag->id);
        }
        
        return redirect()->route('articles.index');

}


// SHOW

 public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }


   
// METODO DI MODIFICA

public function edit(Article $article)
    {
        $tags = Tag::all();
        return view('articles.edit', compact('article', 'tags'));
    }


    // METODO DELLA MODIFICA A SALVATAGGIO
    public function update(Request $request, Article $article)
    {
        $article->update($request->only('title', 'content'));
        $article->tags()->sync($request->tags);

        return redirect()->route('articles.index');
    }



// METODO DI ELIMINAZIONE


public function destroy(Article $article)
  
{

// stacca tutti i tag collegati
    $article->tags()->detach();

//se volessi eliminare anche articolo
$article->delete();
//Da collegare a una vista
return redirect()->route('articles.index');

//Collegamento a bottone per eliminazione;
}
}
		







