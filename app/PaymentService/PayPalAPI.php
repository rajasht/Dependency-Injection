<?php
namespace App\PaymentService;

class PayPalAPI implements PaymentServiceInterface
{
    /* 
    
    private $transaction_id;

    public function __construct($transaction_id)
    {
        $this->transaction_id = $transaction_id;
    }

    // public function Pay():string
    public function Pay():array
    {
            // return "Your Bill Paid using Paypal";           
            // return ['amount' => 123,'transaction'=>'dhgksagkasj'];

            return ['amount' => 123,'transaction'=>$this->transaction_id];
    }

    */

    public function checkout():string
    {
        return "Checkout is done with Paypal";
    }
}