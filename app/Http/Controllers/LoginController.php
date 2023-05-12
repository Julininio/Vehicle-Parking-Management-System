<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Contracts\Support\Renderable;

class LoginController extends Controller
{
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
        // $credentials = $request->validate([
        //     'username' => 'required|username',
        //     'password' => 'required|password',
        // ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return view('login', ['msg' => "Details could not match."]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('login', ['msg' => ""]);
    }
}
