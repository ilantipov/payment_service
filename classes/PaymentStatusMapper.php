<?php

class PaymentStatusMapper implements PaymentStatusMapperInterface
{

    protected $statuses = [
        'SUCCESS_STATUS' => true,
        'RENEWED' => true,
        ];

    /**
     * @inheritDoc
     */
    public function getPaymentActivationStatus(string $incomingStatus): bool
    {

        // TODO: Implement getPaymentActivationStatus() method.
    }
}