<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleEntryController extends Controller
{
    public function entry() {
        return view('manage-vehicles');
    }
}
