<?php


namespace App;


class Pay implements PaymentMethod
{
    private $balance;

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @return mixed
     */
    public function bkash()
    {
        // TODO: Implement bkash() method.
    }

    /**
     * @return mixed
     */
    public function dbbl()
    {
        // TODO: Implement dbbl() method.
    }

    /**
     * @return mixed
     */
    public function rocket()
    {
        // TODO: Implement rocket() method.
    }

    /**
     * @return mixed
     */
    public function nogod()
    {
        // TODO: Implement nogod() method.
    }
}