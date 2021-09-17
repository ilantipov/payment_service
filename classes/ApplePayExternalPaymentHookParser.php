<?php

class ApplePayExternalPaymentHookParser implements ExternalPaymentHookParserInterface
{

    protected $paymentData = null;
    /**
     * @inheritDoc
     */
    public function __construct(Request $request)
    {
        $this->paymentData = new PaymentData();

        /**
         *
         *
         *
         *      тут обработка массива входящих данных и заполнение $this->paymentData через публичные методы
         *
         *      По входящему токену покупки получает пользователя и устанавлвиает его в $this->paymentData
         *
         *
         *
         *
         *
         */
    }

    public function getParsedData(): PaymentDataInterface
    {
        return $this->paymentData;
    }


}