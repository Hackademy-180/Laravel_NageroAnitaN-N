<?php

namespace App\Models;




// use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model


{
    protected $fillable = ['title', 'user_id'];

    // RELAZIONI 

    // Relazione One-To-Many

    // UN POST HA MOLTI COMMENTI, USO hasMany perchè la Fk è nella tabella 
    // Relazione che restituirà tutti quelli associati ; Trasversal con : $post->commenti

    public function user()
    {
        return $this->belongsTo(User::class);
    }




    public function commenti()
    {
        return $this->hasMany(Commento::class);
    }




    // collection , un utente ha dei molti post, ma i likes hanno un campo personale assestante e quindi a parte 

    public function likers()
    {
        return $this->belongsToMany(User::class, 'likes');
    }
}
