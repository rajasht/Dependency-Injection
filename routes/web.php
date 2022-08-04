<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\PaymentService\PayPalAPI;
use App\PaymentService\PaymentServiceInterface;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/payment', function (PayPalAPI $payment) {
//     // dd($request);
    
//     dump($payment->Pay());
    
//     // dd(app());
// });

// Route::get('/payment', function () {

//     dd(app(PayPalAPI::class),app(PayPalAPI::class));
// });

// Route::get('/payment', function (PaymentServiceInterface $payment) {
//     return $payment->checkout();
// });

// Using Facades

Route::get('/payment', function () {
    return Facades\App\PaymentService\PaymentServiceInterface::checkout();  // static calling
});

Route::get('/users',[UserController::class,'index']);