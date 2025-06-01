<?php

use App\Http\Controllers\SendEMailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact',[SendEMailController::class,'contact']);
ROute::post('contact',[SendEMailController::class,'sendEmail'])->name('contact');