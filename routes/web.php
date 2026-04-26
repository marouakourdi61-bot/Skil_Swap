<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserSkillController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileShowController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\MatchesController;

use App\Http\Controllers\MessageController;


Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {

    Route::get('/profile/show', [ProfileShowController::class, 'index'])->name('profile.show');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');

    Route::get('/skills/create', [SkillController::class, 'create'])->name('skills.create');

    Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');

    Route::get('/skills/{skill}/edit', [SkillController::class, 'edit'])->name('skills.edit');

    Route::put('/skills/{skill}', [SkillController::class, 'update'])->name('skills.update');

    Route::delete('/skills/{skill}', [SkillController::class, 'destroy'])->name('skills.destroy');


    Route::get('/my-skills', [UserSkillController::class, 'index'])->name('user.skills.index');

    Route::post('/my-skills', [UserSkillController::class, 'store'])->name('user.skills.store');

    Route::delete('/my-skills/{skill}', [UserSkillController::class, 'destroy'])->name('user.skills.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index']) 
        ->middleware(['auth', 'verified'])
        ->name('dashboard');



    Route::get('/matches', [MatchesController::class, 'index'])->name('matches.index');
    Route::get('/matches/search', [MatchesController::class, 'search'])->name('matches.search');
    Route::get('/matches/{user}', [MatchesController::class, 'show'])->name('matches.show');

    // Exchanges
    Route::get('/exchanges', [ExchangeController::class, 'index'])->name('exchanges.index');
    Route::get('/exchanges/create', [ExchangeController::class, 'create'])->name('exchanges.create');
    Route::post('/exchanges', [ExchangeController::class, 'store'])->name('exchanges.store');
    Route::get('/exchanges/{exchange}', [ExchangeController::class, 'show'])->name('exchanges.show');
    Route::patch('/exchanges/{exchange}', [ExchangeController::class, 'update'])->name('exchanges.update');
    Route::get('/history', [ExchangeController::class, 'history'])->name('exchanges.history');

    Route::post('/message/send', [MessageController::class, 'send'])
    ->name('message.send')
    ->middleware('auth');


    

});

require __DIR__ . '/auth.php';
