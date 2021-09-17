<?php

class ServiceEnumerator
{
    protected const SERVICES = [
       PremiumSubscription::class,
       PremiumForecast::class
    ];

    public static  function getServices(){
        return self::SERVICES;
    }
}