<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/',[AppController::class, 'index'])->name('app.index');
Route::get('/about',[AppController::class, 'about'])->name('app.about');
Route::get('/courses',[AppController::class, 'courses'])->name('app.courses');
Route::get('/search',[AppController::class, 'search'])->name('app.search');

//  This section handles payments via Stripe and PayPal
Route::post('/paypal/payment',[PaypalController::class,'payment'])->name('paypal.payment');
Route::get('/paypal/success',[PaypalController::class,'success'])->name('paypal.success');
Route::get('/paypal/cancel',[PaypalController::class,'cancel'])->name('paypal.cancel');

Route::post('/stripe/payment',[StripeController::class,'payment'])->name('stripe.payment');
Route::get('/stripe/success',[StripeController::class,'success'])->name('stripe.success');
Route::get('/stripe/cancel',[StripeController::class,'cancel'])->name('stripe.cancel');
// end here


Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('/auth/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();

    $user = User::firstOrCreate(
        ['email' => $googleUser->getEmail()],
        [
            'name' => $googleUser->getName(),
            'password' => bcrypt(Str::random(24))
        ]
    );

    Auth::login($user, true);

    return redirect()->route('app.index');
});
