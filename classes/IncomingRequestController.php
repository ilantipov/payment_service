<?php

class IncomingRequestController
{
    public function process(Request $request)
    {

        $paymentParser = new ApplePayExternalPaymentHookParser($request);

        $processResult = (new PaymentProcessor($paymentParser->getParsedData()))->process() ;


    }
}