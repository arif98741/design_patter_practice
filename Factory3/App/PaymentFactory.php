<?php


namespace App;


class PaymentFactory
{
    /**
     * Load Class and Return Instance
     * @param $className
     * @return Bkash|Dbbl|Rocket
     */
    public function create($className)
    {
        /* $class = '\Classes\\' . $className;
         if (class_exists($class)) {
             return new $class(new Position());
         }*/
        if ($className == 'Bkash') {
            return new Bkash(new Pay());
        }
        if ($className == 'Dbbl') {
            return new Dbbl(new Pay());
        }

        if ($className == 'Rocket') {
            return new Rocket(new Pay());
        }

    }
}