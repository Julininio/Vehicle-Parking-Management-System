<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleCategoryController extends Controller
{
    
    public function categ() {
        return view('vehicle-category');
    }

}
