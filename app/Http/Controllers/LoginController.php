<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use App\Http\Controllers\PostController;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $usuario = Usuario::where('name', $request->name)->first();

        if ($usuario && $usuario->password === $request->password) {
            Auth::login($usuario); 
            return redirect()->intended(route('posts.index'));
        } else {
            $error = 'Usuario o contraseña incorrectos';
            return view('auth.login', compact('error'));
        }
    }

    public function loginForm()
    {
        
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('posts.index');
    }
}
