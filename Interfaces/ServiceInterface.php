<?php

interface ServiceInterface
{
    /**
     * @return mixed
     */

    public function getPriceName(): string;

    public function getPrice(): string;

    public function activateService(PaymentDataInterface $paymentData): bool;

    public function isActive(User $user, ?int $forecastId): bool;

    public function deactivateService(PaymentDataInterface $paymentData): bool;
}