<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyAssetController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\AssetAssignmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('employees', EmployeeController::class);
Route::resource('company_assets', CompanyAssetController::class);
Route::resource('logs', LogController::class);
Route::get('assignments/create', [AssetAssignmentController::class, 'create'])->name('assignments.create');
Route::post('assignments', [AssetAssignmentController::class, 'store'])->name('assignments.store');
Route::get('/', [AssetAssignmentController::class, 'stats'])->name('welcome');
