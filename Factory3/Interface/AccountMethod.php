<?php


namespace App;


interface AccountMethod
{
    public function checkBalance();

    public function deductBalance();

    public function refundBalance();

    public function refundQuery();
}