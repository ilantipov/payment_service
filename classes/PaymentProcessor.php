<?php


/**
 *
 */
class PaymentProcessor
{
    public function process(PaymentDataInterface $paymentData): bool
    {
        $transactionLogger = new TransactionLogger($paymentData->getOrderId());

        if(!$transactionLogger->isTransactionLogged()){
            $transactionLogger->createTransaction($paymentData);
        };

        /** @var  $service ServiceInterface|RecurrentServiceInterface */

        $service = $paymentData->getService();
        $serviceActive = $service->isActive();

        $newActivationStatus = (new PaymentStatusMapper($paymentData->getPaymentsStatus()));

        if($newActivationStatus && !$serviceActive){

            $service->activateService($paymentData);
        }

        if($newActivationStatus && $serviceActive){ // надо отменить услугу, изменить статус заказа
                $service->deactivateService($transactionLogger->getOrder());
        }

        return true;
    }

}