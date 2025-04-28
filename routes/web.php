<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');;

Route::get('/download-resume', function () {
    $filePath = storage_path('app/pdfs/Merius_Ntuli_CV.pdf');

    return response()->download($filePath, 'Merius_Ntuli_CV.pdf');
})->name('download.Merius_Ntuli_CV');


Route::get('/Merius_Ntuli_CV', function () {
    $path = storage_path('app/pdfs/Merius_Ntuli_CV.pdf'); // adjust if your file is somewhere else

    return response()->file($path);
})->name('view.Merius_Ntuli_CV');



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

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/download-resume', function () {
$filePath = storage_path('app/pdfs/MT Ntuli Completion letter.pdf');

return response()->download($filePath, 'MT Ntuli Completion letter.pdf');
})->name('download.MT Ntuli Completion letter');


Route::get('/MT Ntuli Completion letter', function () {
$path = storage_path('app/pdfs/MT Ntuli Completion letter.pdf'); // adjust if your file is somewhere else

return response()->file($path);
})->name('view.MT Ntuli Completion letter');
