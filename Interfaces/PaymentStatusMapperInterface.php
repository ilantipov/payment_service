<?php

interface PaymentStatusMapperInterface
{
    /**
     *    Внутри массив соответствий статусов и результата.
     *    На выходе нам надо понять по статусу включать или выключать услугу
     *
     *
     * @param string $incomingStatus
     * @return string
     */
    public function getPaymentActivationStatus(string $incomingStatus): bool;
}