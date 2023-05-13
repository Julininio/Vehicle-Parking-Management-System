<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\VehicleCategoryController;
use App\Http\Controllers\VehicleEntryController;
use App\Http\Controllers\InVehiclesController;
use App\Http\Controllers\OutVehiclesController;
use App\Http\Controllers\ViewReportsController;
use App\Http\Controllers\TotalIncomeController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
	return view('vehicle-category', ['category' => $category]);
});

Route::get('/', [HomeController::class, "index"])->middleware('auth');

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name("login");
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::get('logout', [LoginController::class, 'logout'])->name('logout'); // should this be a post.

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/dashboard', [DashboardController::class, 'begin'])->name("dashboard");

Route::get('/vehicle-category', [VehicleCategoryController::class, 'categ']) -> name('vehicle-category');
Route::get('/add-category', [DashboardController::class, 'show_add_category']);
Route::post('/add-category', [DashboardController::class, 'save_added_category']);

Route::get('/manage-vehicles', function () { return view('manage-vehicles'); });
Route::post('/manage-vehicles', [RegisterController::class, 'register_vehicle']);

Route::get('/in-vehicles', [DashboardController::class, 'show_in_vehicles']);
Route::get('/out-vehicles', [DashboardController::class, 'show_out_vehicles']);

Route::get('/reports', function () { return view('reports'); });

// Route::get('/generate-reports', function () { return view('generate-reports'); });
Route::post('/generate-reports', [DashboardController::class, 'generate_reports']);

Route::get('/total-income', [DashboardController::class, 'total_income']);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
// Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
// Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
// Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('auth')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('auth')->name('change.perform');

// the dashboard
// Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth'); // before

// Route::get('/change-password', function () { return view('change-password'); });
Route::get('/forgot-password', function () { return view('forgot-password'); });
Route::get('/settings', function () { return view('settings'); });




Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
