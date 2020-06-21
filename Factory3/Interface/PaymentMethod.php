<?php


namespace App;


interface PaymentMethod
{
    public function bkash();

    public function dbbl();

    public function rocket();

    public function nogod();
}