<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\Prizecontroller;
use App\Http\Controllers\Backend\RegisterController;
use App\Http\Controllers\Backend\SubscriberController;
use App\Http\Controllers\Backend\TournamentGameController;
use App\Http\Controllers\Backend\TournamentPrizeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('/admin/login', [LoginController::class, 'loginProcess'])->name('admin.login.process');
    Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
        //--register--
        Route::get('/register', [RegisterController::class, 'register'])->name('admin.register');
        Route::post('/register', [RegisterController::class, 'register_store'])->name('admin.register.store');
        //---front user and participation 
        Route::get('/front/user', [SubscriberController::class, 'user'])->name('admin.front.user');
        Route::get('/tournamant/perticipation', [SubscriberController::class, 'tournamant_perticipation'])->name('admin.tournamant.perticipation');
        Route::get('/game/current/perticipation/{id}', [SubscriberController::class, 'currentGame_perticipation'])->name('admin.current_game.participation');
        //---tournament----
        Route::get('/tournament/index', [TournamentGameController::class, 'index'])->name('tournament.game.index');
        Route::get('/tournament/add', [TournamentGameController::class, 'create'])->name('tournament.game.add');
        Route::post('/tournament/store', [TournamentGameController::class, 'store'])->name('tournament.game.store');
        Route::get('/tournament/edit/{id}', [TournamentGameController::class, 'edit'])->name('tournament.game.edit');
        Route::post('/tournament/update/{id}', [TournamentGameController::class, 'update'])->name('tournament.game.update');
        Route::delete('/tournament/delete/{id}', [TournamentGameController::class, 'delete'])->name('tournament.game.destroy');
        Route::resource('/add_prize', TournamentPrizeController::class);
        //----prizes
        Route::resource('/prize', Prizecontroller::class);
    });