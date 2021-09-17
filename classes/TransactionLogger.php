<?php

class TransactionLogger implements TransactionLoggerInterface
{

    /**
     * @inheritDoc
     */
    public function createTransaction(PaymentDataInterface $paymentData): Order
    {
        // TODO: Implement processPaymentData() method.
    }

    /**
     * @inheritDoc
     */
    public function __construct(?string $orderNumber)
    {
    }

    /**
     * @inheritDoc
     */
    public function isTransactionLogged(): bool
    {
        // TODO: Implement isExistingOrder() method.
    }

    /**
     * @inheritDoc
     */
    public function setTransactionService(ServiceInterface $service): TransactionLoggerInterface
    {
        // TODO: Implement setOrderService() method.
    }

    /**
     * @inheritDoc
     */
    public function getOrderService(): ServiceInterface
    {
        // TODO: Implement getOrderService() method.
    }

    /**
     * @inheritDoc
     */
    public function setTransactionUser(User $user): TransactionLoggerInterface
    {
        // TODO: Implement setOrderUser() method.
    }

    /**
     * @inheritDoc
     */
    public function getTransactionUser(): User
    {
        // TODO: Implement getOrderUser() method.
    }

    /**
     * @inheritDoc
     */
    public function setOrderDate(Carbon $datetime): TransactionLoggerInterface
    {
        // TODO: Implement setOrderDate() method.
    }

    /**
     * @inheritDoc
     */
    public function getOrderDate(): Carbon
    {
        // TODO: Implement getOrderDate() method.
    }
}