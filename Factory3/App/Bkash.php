<?php


namespace App;


class Bkash implements AccountMethod
{
    public static $error;
    public static $log;
    public static $message;

    private $payObject;

    public function __construct($bkashObject)
    {
        $this->payObject = $bkashObject;
    }

    /**
     * @return mixed
     */
    public function checkBalance()
    {

    }

    /**
     * @return mixed
     */
    public function deductBalance()
    {
        // TODO: Implement deductBalance() method.
    }

    /**
     * @return mixed
     */
    public function refundBalance()
    {
        // TODO: Implement refundBalance() method.
    }

    /**
     * @return mixed
     */
    public function refundQuery()
    {
        // TODO: Implement refundQuery() method.
    }
}