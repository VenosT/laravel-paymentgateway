<?php

namespace Venost\LaravelPaymentgateway\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;
use Venost\LaravelPaymentgateway\Facades\LaravelPaymentGateway;

class PaystackPaymentController extends Controller
{
    public function redirect_to_gateway(Request $request){
        LaravelPaymentGateway::paystack()->setConfig();

        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            abort(405,$e->getMessage());
        }
    }
}
