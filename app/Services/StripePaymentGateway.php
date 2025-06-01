<?php
// app/Services/StripePaymentGateway.php
namespace App\Services;
class StripePaymentGateway implements PaymentGatewayInterface
{
    public function charge($amount)
    {
        return "Charged Rs. $amount using Stripe";
    }
}