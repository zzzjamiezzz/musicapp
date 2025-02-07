<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ✅ Show Login Form
    public function showLogin()
    {
        return view('auth.login'); // Create `login.blade.php`
    }

    // ✅ Show Register Form
    public function showRegister()
    {
        return view('auth.register'); // Create `register.blade.php`
    }

    // ✅ Handle Registration
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user); // Auto-login after registration
        return redirect('/dashboard'); // Redirect to dashboard
    }

    // ✅ Handle Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard'); // Redirect to dashboard
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // ✅ Handle Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect to login page
    }
}
