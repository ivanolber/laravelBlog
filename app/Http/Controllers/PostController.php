<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    
    public function index()
{

    $posts = Post::with('Usuario')->get(); 
    $usuario = Auth::user();
    return view('posts.index', compact('posts'));
    
}

    
    public function create()
    {
        $usuarios = Usuario::all();
        return view('posts.create', compact('usuarios'));    
    }

    
    public function store(Request $request)
    {
        $posts = new Post;
        $posts->titulo = $request->get('titulo');
        $posts->contenido = $request->get('contenido');
        $posts->usuario_id = Auth::id();
        $posts->save();
        return redirect()->route('posts.index');
    }

    
    public function show($id) {
        $posts = Post::find($id);
        return view('posts.show', compact('posts'));
        }

    
    public function edit(string $id)
    {
        $posts = Post::find($id);
        if(Auth::id()!==$posts->usuario_id){
            return redirect()->route('posts.index');
        }else{
            return view('posts.edit', compact('posts'));
        }
    }

    
    public function update(Request $request, string $id)
    {
        Post::findOrFail($id)->update($request->all());
        return redirect()->route('posts.index');

    }

    
    public function destroy(string $id)
    {
        $posts = Post::find($id);
        if(Auth::id()!==$posts->usuario_id){
            return redirect()->route('posts.index');
        }else{
            Post::findOrFail($id)->delete();
            return redirect()->route('posts.index');
        }
    }
}
