<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    public function show()
    {
        return view('profile', ['msg' => ""]);
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required','max:255', 'min:2'],
            'MobileNumber' => ['max:10'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
            // 'lastname' => ['max:100'],
            // 'address' => ['max:100'],
            // 'city' => ['max:100'],
            // 'country' => ['max:100'],
            // 'postal' => ['max:100'],
            // 'about' => ['max:255']
        ]);

        auth()->user()->update([
            'username' => $request->get('username'),
            'MobileNumber' => $request->get('MobileNumber'),
            'email' => $request->get('email') ,
            // 'lastname' => $request->get('lastname'),
            // 'address' => $request->get('address'),
            // 'city' => $request->get('city'),
            // 'country' => $request->get('country'),
            // 'postal' => $request->get('postal'),
            // 'about' => $request->get('about')
        ]);

        return view("profile", ['msg' => "Admin profile has been updated."]);
    }
}
