<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OutVehiclesController extends Controller
{
    public function out() {
        return view('out-vehicles');
    }
}
