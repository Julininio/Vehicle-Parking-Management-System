<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TotalIncomeController extends Controller
{
    public function income() {
        return view('total-income');
    }

}