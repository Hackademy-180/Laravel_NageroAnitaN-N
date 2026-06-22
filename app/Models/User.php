<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Database\Factories\UserFactory;
// use Illuminate\Database\Eloquent\Attributes\Fillable;
// use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// #[Fillable(['name', 'email', 'password'])]
// #[Hidden(['password', 'remember_token'])]



class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;
    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
        ];
    }
    // RELAZIONE HA MOLTI POST
    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    // relazione ono ha molti poichè un user ha molti commenti
    public function commenti()
    {
        return $this->hasMany(Commento::class);
    }
// traversal mode è la relazione con i modelli che prestabiliscono l'intrconnessione alla relazione concreta,
// fomrmulata da una collection maggior parte dei casi, 

// in questo caso in cui l'utente ha messo dei likes; 


public function likedPosts(){

return $this->belongsToMany(Post::class, 'likes');
}

}
