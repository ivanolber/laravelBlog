<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    

    protected $fillable = [
        'name',
        'password',
    ];

    
    protected $hidden = [
        'password',
    ];

   public function post(){
        return $this->hasMany(Post::class);
        }
   
}
