<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commento extends Model
{
    //
    protected $fillable = ['testo', 'user_id', 'post_id'];


    // RELAZIONI


    // relazione inversa many to one belongsto poichè un commento è di appartenenza a un solo User , Restituisce utente autore- proprietario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relaz. cui un commento appartiene a un solo post e restituisce quindi rapporto di associazione , relazione creata 


    public function commenti()
    {
        return $this->hasMany(Commento::class);
    }

    // public function post()
    // {
    //     return $this->belongsTo(Post::class);
    // }
}

