<?php

use App\Http\Controllers\Api\Auth\RegisteredUserController;
use App\Http\Controllers\Api\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('register', [RegisteredUserController::class, "store"]);
Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::middleware(['auth:sanctum'])
->group(function () {
    Route::delete('logout', [AuthenticatedSessionController::class, 'destroy']);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::controller(SubjectController::class)
    ->prefix("/subject")
    ->name("subjects.")
    ->group(function () {
        Route::get("/", "index")->name("index");
        Route::post("store", "store")->name("store");
    });
});