<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register(Request $request)
    {
$user = new User();

$user->name = $request->name;
$user->email = $request->email;
$user->password = Hash::make($request->password);

$user->save();

Auth::login($user);

return redirect(route('privada'));

    }



    
    public function login(Request $request)
    {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            "active" => true
        ];
        
        $remember = ($request->has('remember') ? true : false);
       
        
        if (Auth::attempt($credentials, $remember)) {
            // El usuario está ahora autenticado y ha sido redirigido...
        } else {
            return redirect('login');
        }
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));

    }
}
