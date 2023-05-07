<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;
use \Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    // use AuthenticatesUsers;

    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'username'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['UserName' => $request->username, 'Password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
