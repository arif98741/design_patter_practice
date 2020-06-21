<?php

namespace Classes;

use App\Shape;

class Rectangle implements Shape
{

    private $position;


    /**
     * Rectangle constructor.
     * @param $position
     */
    public function __construct($position)
    {
        $this->position = $position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return mixed
     */
    public function drawShape()
    {
        // TODO: Implement drawShape() method.
    }

    /**
     * @return mixed
     */
    public function deleteShape()
    {
        // TODO: Implement deleteShape() method.
    }

    /**
     * @return mixed
     */
    public function resizeShape()
    {
        // TODO: Implement resizeShape() method.
    }

    public function tutorial()
    {

    }
}