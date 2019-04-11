<?php


namespace LaravelPayment\PaymentVKPay;

use LaravelPayment\Manager\Exceptions\Payment\AuthException;
use LaravelPayment\Manager\Exceptions\Payment\CurrencyUnknownException;
use LaravelPayment\Manager\Exceptions\Payment\InvalidArgumentException;
use LaravelPayment\Manager\Exceptions\Payment\OrderNumberException;
use LaravelPayment\Manager\Exceptions\Payment\UnknownException;
use LaravelPayment\Manager\Models\Payment;
use LaravelPayment\Manager\Payment\ProviderAbstract;
use LaravelPayment\Manager\Payment\Results\CallbackResult;
use LaravelPayment\Manager\Payment\Results\ProcessResult;
use LaravelPayment\Manager\Payment\Results\StatusResult;
use LaravelPayment\Manager\Support\RequestClient;

class Provider extends ProviderAbstract
{

    const API_URI = 'https://securepayments.sberbank.ru';
    const API_URI_TEST = 'https://3dsec.sberbank.ru';


    public function boot()
    {


    }

    public function callback($data): CallbackResult
    {

    }

    public function process($orderNumber, $currency, $amount): ProcessResult
    {

    }

    public function status($data): StatusResult
    {

    }


}
