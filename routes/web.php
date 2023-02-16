<?php

/*
|--------------------------------------------------------------------------
| paymentgateway Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your package.
|
*/

/* ----------------------------------------
    STRIPE ROUTE
---------------------------------------- */
Route::group(['middleware' => 'web'],function (){
    /**
     *  STRIPE PAYMENT ROUTE
     * */
    Route::post('gtspayment-gateway/stipe',[\Venost\LaravelPaymentgateway\Http\Controllers\StripePaymentController::class,'charge_customer'])->name('gts.payment.gateway.stripe');
    Route::post('gtspayment-gateway/paystack',[\Venost\LaravelPaymentgateway\Http\Controllers\PaystackPaymentController::class,'redirect_to_gateway'])->name('gts.payment.gateway.paystack');
    Route::get('gtspayment-gateway/paystack-callback',[\Venost\LaravelPaymentgateway\Http\Controllers\PaystackPaymentController::class,'callback'])->name('gts.payment.gateway.paystack.callback');
});

