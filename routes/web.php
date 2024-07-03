<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MapController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('accueil');

Route::get('/menu', function () {
    return view('pages.menu');
})->name('menu');

Route::get('/mentionslegales', function () {
    return view('pages.footer.mentionslegales');
})->name('mentionslegales');

Route::get('/conditionsgeneralesdevente', function () {
    return view('pages.footer.conditionsvente');
})->name('cgv');

Route::get('/confidentialite', function () {
    return view('pages.footer.confidentialite');
})->name('confidentialite');

Route::get('/plandusite', function () {
    return view('pages.footer.plandusite');
})->name('plandusite');

Route::get('/faq', function () {
    return view('pages.footer.faq');
})->name('faq');

Route::get('/contact&acces', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/réserver', function () {
    return view('pages.reserver');
})->name('reserver');

Route::get('/noscabanes', function () {
    return view('pages.cabanes.noscabanes');
})->name('noscabanes');

Route::get('/cabaneniddouillet', function () {
    return view('pages.cabanes.niddouillet');
})->name('cabane1');

Route::get('/cabaneosmose', function () {
    return view('pages.cabanes.osmose');
})->name('cabane2');

Route::get('/cabaneescapade', function () {
    return view('pages.cabanes.escapade');
})->name('cabane3');

Route::get('/cabaneeden', function () {
    return view('pages.cabanes.eden');
})->name('cabane4');


Route::get('/prestationsetservices', function () {
    return view('pages.prestations');
})->name('prestations');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
