<?php


namespace Classes;


class ShapeFactory
{
    public function create($className)
    {
        $class = '\Classes\\' . $className;
        if (class_exists($class)) {
            return new $class(new Position());
        } else {
            echo 'Class Does Not exis';
        }
    }
}