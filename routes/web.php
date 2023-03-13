<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Clinic\ConsultationController;
use App\Http\Controllers\Clinic\SurgeryController;
use App\Http\Controllers\Clinic\QuoteController;
use App\Http\Controllers\Clinic\HospitalizationController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\Patient\StudController;
use App\Http\Controllers\Pharmacy\WarehouseController;
use App\Http\Controllers\Pharmacy\SupplierController;
use App\Http\Controllers\Pharmacy\SupplyController;
use App\Http\Controllers\Setting\MenuController;
use App\Http\Controllers\Setting\ParameterController;
use App\Http\Controllers\Report\ReportController;
use App\Http\Controllers\Setting\RoleController;
use App\Http\Controllers\Setting\UserController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::prefix('clinic')->name('clinic.')->group(function () {
        Route::resource('/consultations', ConsultationController::class);
        Route::resource('/hospitalizations', HospitalizationController::class);
        Route::resource('/surgeries', SurgeryController::class);
        Route::resource('/quotes', QuoteController::class);
    });
    Route::prefix('patients')->name('patients.')->group(function () {
        Route::resource('/records', PatientController::class)->names('records');
        Route::resource('/studs', StudController::class);
    });
    Route::resource('/reports', ReportController::class)->names('reports');
    Route::prefix('pharmacy')->name('pharmacy.')->group(function () {
        Route::resource('/inventory', WarehouseController::class);
        Route::resource('/suppliers', SupplierController::class);
        Route::resource('/supplies', SupplyController::class);
    });
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::resource('/menus', MenuController::class);
        Route::resource('/parameters', ParameterController::class);
        Route::resource('/roles', RoleController::class);
        Route::resource('/users', UserController::class);
    });
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
