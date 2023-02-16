<?php

namespace Venost\LaravelPaymentgateway\Base;

use Venost\LaravelPaymentgateway\Base\Gateways\CashFreePay;
use Venost\LaravelPaymentgateway\Base\Gateways\FlutterwavePay;
use Venost\LaravelPaymentgateway\Base\Gateways\InstamojoPay;
use Venost\LaravelPaymentgateway\Base\Gateways\MidtransPay;
use Venost\LaravelPaymentgateway\Base\Gateways\MolliePay;
use Venost\LaravelPaymentgateway\Base\Gateways\PayFastPay;
use Venost\LaravelPaymentgateway\Base\Gateways\PaypalPay;
use Venost\LaravelPaymentgateway\Base\Gateways\PaystackPay;
use Venost\LaravelPaymentgateway\Base\Gateways\PaytmPay;
use Venost\LaravelPaymentgateway\Base\Gateways\PayUmoneyPay;
use Venost\LaravelPaymentgateway\Base\Gateways\RazorPay;
use Venost\LaravelPaymentgateway\Base\Gateways\StripePay;
use Venost\LaravelPaymentgateway\Base\Gateways\MarcadoPagoPay;

class PaymentGatewayHelpers
{

    public function stripe() : StripePay
    {
        return new StripePay();
    }
    public function paypal() : PaypalPay
    {
        return new PaypalPay();
    }
    public function midtrans() : MidtransPay
    {
        return new MidtransPay();
    }
    public function paytm() : PaytmPay
    {
        return new PaytmPay();
    }
    public function razorpay() : RazorPay
    {
        return new RazorPay();
    }
    public function mollie() : MolliePay
    {
        return new MolliePay();
    }
    public function flutterwave() : FlutterwavePay
    {
        return new FlutterwavePay();
    }
    public function paystack() : PaystackPay
    {
        return new PaystackPay();
    }

    public function payfast() : PayFastPay
    {
        return new PayFastPay();
    }
    public function cashfree() : CashFreePay
    {
        return new CashFreePay();
    }
    public function instamojo() : InstamojoPay
    {
        return new InstamojoPay();
    }
    public function marcadopago() : MarcadoPagoPay
    {
        return new MarcadoPagoPay();
    }
    public function payumoney() : PayUmoneyPay
    {
        return new PayUmoneyPay();
    }
    public function script_currency_list(){
        return GlobalCurrency::script_currency_list();
    }
}
