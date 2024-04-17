<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Mostrar el formulario de login
    public function index()
    {
        return view('login');
    }

    // Procesar el login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return $this->redirectBasedOnRole();
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    // Mostrar el formulario de registro
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Procesar el registro
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:administrador,usuario',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        Auth::login($user);

        return $this->redirectBasedOnRole();
    }

    private function redirectBasedOnRole()
    {
        if (Auth::user()->role === 'administrador') {
            return redirect('productosAdmin');
        } else {
            return redirect('/');
        }
    }
    // Método para cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();  // Cierra la sesión del usuario

        $request->session()->invalidate();  // Invalida la sesión para evitar que sea usada de nuevo
        $request->session()->regenerateToken();  // Regenera el token csrf para prevenir ataques CSRF

        return redirect('/login');  // Redirige al usuario a la página de login
    }
}
