<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');;

Route::get('/download-resume', function () {
    $filePath = storage_path('app/pdfs/resume.pdf');

    return response()->download($filePath, 'resume.pdf');
})->name('download.resume');


Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/experience', function () {
    return view('experience');
})->name('experience');

Route::get('/more', function () {
    return view('more');
})->name('more');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');