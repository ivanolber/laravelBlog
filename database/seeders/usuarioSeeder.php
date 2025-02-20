<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Usuario;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = new Usuario();
        $usuario->name  = "Granero";
        $usuario->password = "1234";
        $usuario->save();

        $usuario = new Usuario();
        $usuario->name  = "Miguel";
        $usuario->password = "1234";
        $usuario->save();

    }
}
