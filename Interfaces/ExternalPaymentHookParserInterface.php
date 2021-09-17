<?php

/**
 *
 */
interface ExternalPaymentHookParserInterface
{
    /**
     * @param array $data Массив данных, полученных от гугла или эппла. И сразу разбирает и сохраняет внутри
     */

    public function __construct(Request $request);

    public function getParsedData(): PaymentDataInterface;


}