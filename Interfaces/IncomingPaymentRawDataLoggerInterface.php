<?php

interface IncomingPaymentRawDataLoggerInterface
{
    /**
     *
     * stores all incoming data to log to analyze errors
     * $paymentData - serialized array
     * user->id
     * $tokenData->purchaseToken
     */

    public function __construct(
        PaymentDataInterface $paymentData,
        User $user,
        TokenDataInterface $tokenData);

}