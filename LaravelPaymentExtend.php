<?php


namespace LaravelPayment\PaymentVKPay;


use LaravelPayment\Manager\Events\PaymentServiceBooted;

class LaravelPaymentExtend
{
    public function handle(PaymentServiceBooted $paymentBooted)
    {
        $paymentBooted->extendService('vkpay', Provider::class);
    }
}
