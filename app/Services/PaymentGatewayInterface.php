<?php
// App/Services/PaymentGatewayInterface.php
namespace App\Services;
interface PaymentGatewayInterface
{
    public function charge($amount);
}