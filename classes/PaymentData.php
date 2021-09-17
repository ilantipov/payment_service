<?php

class PaymentData implements PaymentDataInterface
{


    /**
     * @param ServiceInterface $service
     * @return PaymentDataInterface
     *
     *
     *
     *
     *           ТУТ НИЧЕГО ИНТЕРЕСНОГО - ВСЕ В ИНТЕРФЕЙСЕ
     *
     *
     */


    public function setService(ServiceInterface $service): PaymentDataInterface
    {
        // TODO: Implement setService() method.
    }

    public function getService(): ServiceInterface
    {
        // TODO: Implement getService() method.
    }

    /**
     * @inheritDoc
     */
    public function setOrderId(string $orderId): PaymentDataInterface
    {
        // TODO: Implement setOrderId() method.
    }

    /**
     * @inheritDoc
     */
    public function getOrderId(): string
    {
        // TODO: Implement getOrderId() method.
    }

    /**
     * @inheritDoc
     */
    public function setUser(User $user): PaymentDataInterface
    {
        // TODO: Implement setUser() method.
    }

    /**
     * @inheritDoc
     */
    public function getUser(): User
    {
        // TODO: Implement getUser() method.
    }

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): PaymentDataInterface
    {
        // TODO: Implement setCurrency() method.
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        // TODO: Implement getCurrency() method.
    }

    /**
     * @inheritDoc
     */
    public function setSumm(string $summ): PaymentDataInterface
    {
        // TODO: Implement setSumm() method.
    }

    /**
     * @inheritDoc
     */
    public function getSumm(): double
    {
        // TODO: Implement getSumm() method.
    }

    /**
     * @inheritDoc
     */
    public function setActiveTill(Carbon $datetime): PaymentDataInterface
    {
        // TODO: Implement setActiveTill() method.
    }

    /**
     * @inheritDoc
     */
    public function getActiveTill(): Carbon
    {
        // TODO: Implement getActiveTill() method.
    }

    /**
     * @inheritDoc
     */
    public function setPaidAt(Carbon $datetime): PaymentDataInterface
    {
        // TODO: Implement setPaidAt() method.
    }

    /**
     * @inheritDoc
     */
    public function getPaidAt(): Carbon
    {
        // TODO: Implement getPaidAt() method.
    }

    /**
     * @inheritDoc
     */
    public function setPaymentStatus(int $paymentStatus): PaymentDataInterface
    {
        // TODO: Implement setPaymentStatus() method.
    }

    /**
     * @inheritDoc
     */
    public function getPaymentsStatus(): int
    {
        // TODO: Implement getPaymentsStatus() method.
    }
}