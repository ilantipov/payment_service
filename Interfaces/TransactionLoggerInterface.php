<?php


/**
 *  Внутри реализации класса есть protected $order куда при
 */

interface TransactionLoggerInterface
{

    /**
     * @param PaymentDataInterface $
     * @return mixed
     *
     * Создает заказ, доставая из платежных данных:
     * номер заказа магазина
     * номер транзакции магазина для гугла заказ, для эппла номер транзакции
     * услугу
     * название продукта в магазине
     * пользователя, купившего продукт
     * название класса услуги
     *
     */
    public function createTransaction(PaymentDataInterface $paymentData): void;

}