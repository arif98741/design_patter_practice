<?php


namespace Classes;


use App\Shape;

class Circle implements Shape
{

    private $position;

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
        echo 'hello';
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

    public function homeCircle($abc)
    {
        return $abc;
    }
}