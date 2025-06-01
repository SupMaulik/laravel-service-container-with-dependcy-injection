<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PaymentController;
Route::get("/",[DemoController::class,"show"]);
Route::get("/payment_stripe",[PaymentController::class,"pay"]);
Route::get("/payment",[PaymentController::class,"pay1"]);