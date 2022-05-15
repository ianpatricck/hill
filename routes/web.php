<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::controller(PageController::class)->group(function () {
    Route::get("/", "index");
    Route::get("/product/{id}", "product");
});

Route::controller(ProductController::class)->group(function () {
    Route::post("/product/buy", "buy");
});

