<?php

namespace App\Http\Controllers;

use App\Services\PaymentGatewayInterface;
use Illuminate\Http\Request;
use App\Services\StripePaymentGateway;
class PaymentController extends Controller
{
    //
    public function pay(StripePaymentGateway $Stripe)
    {
        return $Stripe->charge(1000);
    }

    
    public function pay1(PaymentGatewayInterface $Stripe)
    {
        return $Stripe->charge(5000);
    }
}
