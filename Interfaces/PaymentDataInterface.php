<?php

interface PaymentDataInterface
{
//    /**
//     * @param ServiceInterface $service
//     * @return mixed
//     */
//    public function setService(ServiceInterface $service): self;

    /**
     * @param string $purchaseToken Токен покупки для гугла или иной идентификатор подписки/покупки
     * @return $this
     */
    public function setPurchaseToken(string $purchaseToken): self;

    /**
     * @return string Используется в логе транзакцй
     */
    public function getPurchaseToken(): string;

    /**
     * @param string $transactionId Идентификатор платежной операции. Для гугла - order_id
     * @return $this
     */
    public function setTransactionId(string $transactionId): self;

    /**
     * @return string
     */
    public function getTransactionId(): string;

    /**
     * @param ServiceInterface $service Услуга, которую мы определим по названию продукта магазина
     * @return $this
     */
    public function setService(ServiceInterface $service): self;

    /**
     * @return ServiceInterface услуга, которую определил парсер
     */
    public function getService(): ServiceInterface;

    /**
     * @param string $orderId Установить номер заказа
     */
    public function setOrderId(string $orderId): self;

    /**
     * @return string возвращает номер заказа, который мы будем хранить у себя и связывать оплаты между собой
     */
    public function getOrderId(): string;

    /**
     * @param User $user
     */
    public function setUser(User $user): self;

    /**
     * @return User возвращает пользователя по данным в платеже
     */

    public function getUser(): User;

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): self;
    
    /**
     * @return string возвращает валюту заказа строкой
     */
    public function getCurrency(): string;

    /**
     * @param string $summ Получает сумму строкой и конвертирует ее в float с 6 знаками после запятой (на случай конвертации)
     */
    public function setSumm(string $summ): self;

    /**
     * @return float возвращает сумму оплаты с точностью до 6 знаков после запятой
     */
    public function getSumm(): double;

    /**
     * @param Carbon $datetime Установить время активности услуги там, где это применимо
     * @return $this
     */
    public function setActiveTill(Carbon $datetime): self;

    /**
     * @return Carbon Получить время активности услуги там где это применимо
     */
    public function getActiveTill(): Carbon;

    /**
     * @param Carbon $datetime Установить дату проведения оплаты
     * @return $this
     */
    public function setPaidAt(Carbon $datetime): self;

    /**
     * @return Carbon Установить дату оплаты
     */
    public function getPaidAt(): Carbon;

    /**
     * @param int $paymentStatus Установить статус платежа. При установке он должен быть один из перечисления (TODO класс перечисления статусов)
     * @return $this
     */

    public function setPaymentStatus(int $paymentStatus): self;

    /**
     * @return int статус платежа константа, которую вернет класс перечисления статусов.
     */

    public function getPaymentsStatus(): int;

    /**
     * @param int $forecastId если парсер понимает, что запрос относится к прогнозу - задает forecast_id
     * @return $this
     */
    public function setForecastId(int $forecastId): self;

    public function getForecastId(): int;
}