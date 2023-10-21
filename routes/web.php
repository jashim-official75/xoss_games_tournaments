<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\RegisterController;
use App\Http\Controllers\Backend\SubscriberController;
use App\Http\Controllers\Backend\TournamentGameController;
use App\Http\Controllers\Backend\TournamentPaymentController;
use App\Http\Controllers\Frontend\ResetPasswordController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\SignInController;
use App\Http\Controllers\Frontend\SignUpController;
use App\Http\Controllers\Frontend\TournamentController;
use App\Http\Controllers\GameScoreController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');

//----user login and register---
Route::group(['middleware'=> 'loginRegisterCheck'], function(){
    Route::get('/sign-up', [SignUpController::class, 'index'])->name('user.sign_up');
    Route::post('/sign-up', [SignUpController::class, 'store'])->name('user.signup.store');
    Route::get('/sign-in', [SignInController::class, 'index'])->name('user.sign_in');
    Route::post('/sign-in', [SignInController::class, 'store'])->name('user.signin.store');
});

Route::group(['middleware'=> 'subscriber'], function(){
    Route::get('/logout', [SignUpController::class, 'logout'])->name('user.logout');
    Route::get('/user/profile', [ProfileController::class, 'profile'])->name('user.profile');
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
});

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
