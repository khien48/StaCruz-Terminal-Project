<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionController;

use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/sectionlist', function () {
    return Inertia::render('Sectionlist');
})->name('sectionlist');




// --------------------------Section----------------------------- 

Route::post('/sections', [SectionController::class, 'store'])->name('SectionList');
Route::get('/delete-section-list/{id}', [SectionController::class, 'delete'])->name('delete');
// Route::get('/', [SectionController::class, 'index'])->name('sections.store');

