<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InVehiclesController extends Controller
{
    
    public function in() {
        return view('in-vehicles');
    }

}
