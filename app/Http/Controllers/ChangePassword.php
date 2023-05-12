<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ChangePassword extends Controller
{

    protected $user;

    public function __construct()
    {
        // Auth::logout();

        // $id = intval(request()->id);
        // $this->user = User::find($id);
    }

    public function show()
    {
        return view('change-password', ['msg' => ""]);
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required'],
            'newpassword' => ['required', 'min:5'],
            'confirmpassword' => ['same:newpassword']
        ]);

        $existingUser = User::where('email', $attributes['email'])->first();
        if ($existingUser) {
            $existingUser->update([
                'password' => $attributes['newpassword']
            ]);
            return view('change-password', ['msg' => "Password updated successfully."]);
        } else {
            return view('change-password', ['msg' => "Your password could not be updated."]);
        }
    }
}
