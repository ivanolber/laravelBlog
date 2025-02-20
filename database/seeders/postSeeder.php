<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Usuario;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->titulo  = "Mi viaje";
        $post->contenido = "Mi viaje a Japón fue maravilloso...";
        $post->usuario_id = 1;
        $post->save();
    }
}
