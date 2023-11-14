<?php

use App\Http\Controllers\NewsletterMemberController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', IndexController::class)->name('home');

Route::get('/go-to-payment/{webinar}', function (Request $request, Webinar $webinar) {
    $user = $request->user();

    return view('go-to-payment', [
        'intent' => $user->createSetupIntent(),
        'webinar' => $webinar,
    ]);
})->name('goToPayment');

Route::post('/processPayment/{webinar}', function (Request $request, Webinar $webinar) {
    $user = $request->user();
    $paymentMethod = $request->input('payment_method');
    $user->createOrGetStripeCustomer();
    $user->addPaymentMethod($paymentMethod);
    try {
        $user->charge($webinar->price * 100, $paymentMethod, ['off_session' => true , 'description' => 'test description', 'currency' => 'USD', "shipping" => ["name" => "sanskar", "address" => ["city" => "New York", "country" => "US", "line1" => "address", "line2" => "", "postal_code" => "10001", "state" => 'New York']]]);
    } catch (\Exception $e) {
        return back()->withErrors(['message' => 'Error creating subscription. ' . $e->getMessage()]);
    }
    return route('home');
})->name('processPayment');


Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/how-it-works', function () {
    return view('how-it-works');
})->name('how-it-works');

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');

Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact-us.store');

Route::post('/newsletter-members/store', [NewsletterMemberController::class, 'store'])->name('newsletter-members.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
