<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Vehicle_Info;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2',
            'password' => 'required|min:5|max:255',
        ]);
        $user = User::create($attributes);
        auth()->login($user);

        return redirect('/dashboard');
    }

    public function register_vehicle(){
        $attributes = request()->validate([
            'RegistrationNumber' => 'required',
            'VehicleCompanyname' => 'required',
            'VehicleCategory' => 'required',
            'OwnerName' => 'required',
            'OwnerContactNumber' => 'required',
        ]);
        
        Vehicle_Info::create($attributes);

        return redirect('/manage-vehicles');

    }
}
