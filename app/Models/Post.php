<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts'; 

    protected $fillable = [
        'titulo',
        'contenido',
        'usuario_id',
        'created_at',
        'updated_at',
    ];

    public function usuario(){
        return $this->belongsTo(Usuario::class);
        }

}