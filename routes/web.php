<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ShipmodelController;
use App\Http\Controllers\ShipController;

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

Route::get('/', function() {
    return redirect('manufacturers');
});

//Route::middleware(['auth'])->group(function () {

    Route::get('manufacturers', [ManufacturerController::class, 'getIndex']);
    Route::get('manufacturers/index', [ManufacturerController::class, 'getIndex']);
    Route::get('manufacturers/show/{id}', [ManufacturerController::class, 'getShow']);
    Route::get('manufacturers/add', [ManufacturerController::class, 'getAdd']);
    Route::post('manufacturers/save', [ManufacturerController::class, 'postSave']);
    Route::get('manufacturers/edit/{id}', [ManufacturerController::class, 'getEdit']);
    Route::post('manufacturers/update/{id}', [ManufacturerController::class, 'postUpdate']);
    Route::get('manufacturers/delete/{id}', [ManufacturerController::class, 'getDelete']);
    Route::get('manufacturers/json', [ManufacturerController::class, 'getJson']);


    

//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
