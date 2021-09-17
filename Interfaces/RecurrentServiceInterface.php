<?php

interface RecurrentServiceInterface
{
    public function getStartTime(): Carbon;

    public function getActiveTill(): Carbon;



}