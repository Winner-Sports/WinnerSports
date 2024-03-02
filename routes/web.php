<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

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
//login
Route::get('/', function () {
    return view('login');
});


//Admin Dashboard
Route::get('/admin', function () {
    return view('adminboard');
});

//Invoice 
Route::get('/invoice', function () {
    return view('invoice');
});

Route::post('/save-invoice', [InvoiceController::class,'saveInvoice'] )->name('save.invoice');

Route::get('/invpdf', function () {
    return view('invpdf');
});