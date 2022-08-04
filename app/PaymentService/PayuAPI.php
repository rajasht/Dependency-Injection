<?php
    namespace App\PaymentService;

class PayuAPI implements PaymentServiceInterface
{
    public function checkout():string
    {
        return "Checkout is done with Pay U Money";
    }
}