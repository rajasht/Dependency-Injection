<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Contracts\Support\DeferrableProvider;
use App\PaymentService\PayPalAPI;
use App\PaymentService\PayuAPI;
use App\PaymentService\PaymentServiceInterface;
use Illuminate\Support\Facades\App;

class PaymentServiceProvider extends ServiceProvider //implements DeferrableProvider
{
    
    // public function register()
    // {
    //     $this->app->bind(PayPalAPI::class,function(){
    //         return new PayPalAPI("Transaction Id : ".rand(10,1000));
    //     });
    // }
    // --------------- MAking SingleTon------------------
    // --------------- MAking SingleTon Method 1------------------
    // public function register()
    // {
        //     $this->app->singleton(PayPalAPI::class,function(){
        //         return new PayPalAPI("Transaction Id : ".rand(10,1000));
        //     });
        // }
            
    // --------------- MAking SingleTon Method 2------------------
    // public function register()
    // {
    //     $this->app->singleton(PayPalAPI::class,function(){
    //         return new PayPalAPI("Transaction Id : ".rand(10,1000));
    //     }, true);
    // }

    //----------------- Use of instance for Singleton ------------------
    // public function register()
    // {
    //     $paypal = new PayPalAPI("Transaction Id : ".rand(10,1000));
    //     $this->app->instance(PayPalAPI::class,$paypal);
    // }

    // public function provides() : array
    // {
    //     return [PayPalAPI::class];
    // }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(PaymentServiceInterface::class,PaypalAPI::class);   // using service provider
        // $this->app->bind(PaymentServiceInterface::class,PayuAPI::class);     // using service provider
        // App::bind(PaymentServiceInterface::class,PayPalAPI::class);         // using facades
        app()->bind(PaymentServiceInterface::class,PaypalAPI::class);         // using global method
    }



    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
