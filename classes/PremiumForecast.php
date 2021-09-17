<?php

class PremiumForecast implements ServiceInterface
{
    public function getPrice(): string
    {
        // TODO: Implement getPrice() method.
    }

    public function activateService(PaymentDataInterface $paymentData): bool
    {
        // TODO: Implement activateService() method.
    }

    public function isActive(User $user, ?int $forecastId): bool
    {
        // TODO: Implement isActive() method.
    }

    public function deactivateService(PaymentDataInterface $paymentData): bool
    {
        // TODO: Implement deactivateService() method.
    }
}