<?php

use App\Http\Controllers\Backend\TournamentPaymentController;
use App\Http\Controllers\Frontend\ResetPasswordController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\ReferrController;
use App\Http\Controllers\Frontend\SignInController;
use App\Http\Controllers\Frontend\SignUpController;
use App\Http\Controllers\Frontend\TournamentController;
use App\Http\Controllers\GameScoreController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::middleware('preventBackHistory')->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('home');
    Route::get('/rules', [FrontendController::class, 'tournament_rules'])->name('tournament_rules');
    Route::get('/faq', [FrontendController::class, 'tournament_faq'])->name('tournament_faq');
    Route::get('/support', [FrontendController::class, 'tournament_support'])->name('tournament_support');
    Route::get('/prizes', [FrontendController::class, 'prizes'])->name('prizes');
    //----user login and register---
    Route::group(['middleware' => 'loginRegisterCheck'], function () {
        Route::get('/sign-up', [SignUpController::class, 'index'])->name('user.sign_up');
        Route::post('/sign-up', [SignUpController::class, 'store'])->name('user.signup.store');
        Route::get('/sign-in', [SignInController::class, 'index'])->name('user.sign_in');
        Route::post('/sign-in', [SignInController::class, 'store'])->name('user.signin.store');
    });
    Route::group(['middleware' => 'subscriber'], function () {
        Route::get('/referr', [ReferrController::class, 'referr'])->name('referr');
        Route::get('/logout', [SignUpController::class, 'logout'])->name('user.logout');
        Route::get('/user/profile', [ProfileController::class, 'profile'])->name('user.profile');
        Route::get('/user/games', [ProfileController::class, 'my_games'])->name('user.my_games');
        Route::post('/user/profile/{id}', [ProfileController::class, 'profile_update'])->name('user.profile.update');
    });
    //--forgot and reset password route ----
    Route::get('/verify-number', [ResetPasswordController::class, 'verify_number'])->name('verify_number');
    Route::post('/send-otp/store', [ResetPasswordController::class, 'send_otp_store'])->name('send.otp.store');
    Route::get('/otp', [ResetPasswordController::class, 'otp'])->name('otp');
    Route::get('/otp-match', [ResetPasswordController::class, 'otp_match'])->name('otp.match');
    Route::get('/new-password/{otp}', [ResetPasswordController::class, 'new_password'])->name('new.password');
    Route::post('/new-password/store', [ResetPasswordController::class, 'new_password_store'])->name('new.password.store');
    //----tournament game ---
    Route::get('/tournament/GameDetails/{slug}', [TournamentController::class, 'game_details'])->name('tournament.game.details');
    Route::get('/game-score', [GameScoreController::class, 'updateScore']);
    Route::get('/tournament/gamePlay/{slug}', [TournamentController::class, 'gamePlay'])->name('tournament.game.play');
    //payment
    Route::get('/tournament/payment/{slug}', [TournamentPaymentController::class, 'tournamant_payment'])->name('tournament.payment');
    Route::get('/tournament/success/{id}', [TournamentPaymentController::class, 'tournamant_payment_success'])->name('tournament.payment.success');
    Route::get('/tournament/deny/{slug}', [TournamentPaymentController::class, 'tournamant_payment_deny'])->name('tournament.payment.deny');
    Route::get('/tournament/error/{slug}', [TournamentPaymentController::class, 'tournamant_payment_error'])->name('tournament.payment.error');
    //end payment

    //----admin routes start--
    require __DIR__ .'/admin.php';
    //--- admin routes end ---    

    //Config cache clear
    Route::get('clear', function () {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('optimize');
        dd("All clear!");
    });
    //--storage link
    Route::get('/storage-link', function () {
        Artisan::call('storage:link');
        dd('Storage Link Success');
    });
});
