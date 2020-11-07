<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/applicantlist", [\App\Http\Controllers\ApplicantController::class, "wellfunc"]);

Route::get('/applicantlist/{id}/edit', [\App\Http\Controllers\ApplicantController::class, 'edit']) -> name("applicants.edit");

Route::put('/applicantlist/{id}/update', [\App\Http\Controllers\ApplicantController::class, 'update']) -> name('applicants.update');
