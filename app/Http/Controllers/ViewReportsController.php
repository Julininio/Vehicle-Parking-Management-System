<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewReportsController extends Controller
{
    public function reports() {
        return view('reports');
    }
}
