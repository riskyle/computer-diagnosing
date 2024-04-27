<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DiagnoseController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', fn () => redirect("login"));

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get("/diagnosing-result/{id}", [DiagnoseController::class, "diagnosticViewResult"])->name('diagnostic');
    Route::get("/devices", [DeviceController::class, "devices"])->name("device");
    // Route::get("/issues/{serial_number}", [IssueController::class, "viewIssues"])->name("issue");

    // Ajax returned JSON
    Route::post("/diagnosing", [DiagnoseController::class, "diagnosing"]);
    Route::get("/get-devices", [DeviceController::class, "getDevices"]);
    // Route::get("/get-issues", [IssueController::class, "getIssues"]);
    // Route::get("/issue", [IssueController::class, "issues"]);
    Route::get("/resolved/{id}", [DiagnoseController::class, "resolved"]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
