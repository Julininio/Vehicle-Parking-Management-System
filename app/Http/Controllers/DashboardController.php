<?php

namespace App\Http\Controllers;

use App\Models\VCategory;
use App\Models\Vehicle_Info;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public  function show_dash(){
        return view("dashboard", ['rows' => $this->get_chart_data()]);
    }

    public function get_chart_data(){
        $row5 = Vehicle_Info::where("Status", '')->count();
        $row6 = Vehicle_Info::where("Status", 'Out')->count();
        $row = Vehicle_Info::where("VehicleCategory", 'Two Wheeler')->count();
        $row2 = Vehicle_Info::where("VehicleCategory", 'Four Wheeler')->count();
        $row4 = Vehicle_Info::where("VehicleCategory", 'Three Wheeler')->count();
        $row_num = Vehicle_Info::get()->count();

        return [$row, $row2, $row4, $row5, $row6, $row_num];
    }

    public function show_category(){
        return view("vehicle-category", ['categories' => $this->get_vehicles()]);
    }

    public function get_vehicles(){
        $categories = VCategory::all();
        return $categories;
    }

    public function show_in_vehicles(){
        $rows = Vehicle_Info::where("Status", '')->get();
        return view('in-vehicles', ['rows' => $rows]);
    }

    public function show_out_vehicles(){
        $rows = Vehicle_Info::where("Status", 'Out')->get();
        return view('out-vehicles', ['rows' => $rows]);
    }

    public function generate_reports(Request $request){

        $dates = $request->validate([
            'fromdate' => 'required',
            'todate' => 'required',
        ]);

        // TODO; find a query for these reports.
        // return view("generate-reports", ['reports' => $reports]);
    }

    public function total_income(){
        return view('total-income');
    }

    public function show_add_category(){
        return view('add-category');
    }

}
