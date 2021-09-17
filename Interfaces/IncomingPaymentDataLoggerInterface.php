<?php

interface IncomingPaymentDataLoggerInterface
{
    public function __construct(
        PaymentDataInterface $paymentData,
        User $user,
        TokenDataInterface $tokenData);

     /**
     *
     * stores all incoming data to log
     * $paymentData - serialized array
     * user->id
     * $tokenData->purchaseToken
     */


}