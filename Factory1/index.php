<?php
require 'App/Shape.php';
include 'Classes/ShapeFactory.php';
include 'Classes/Position.php';
include 'Classes/Rectangle.php';
include 'Classes/Circle.php';

use Classes\ShapeFactory;


$factory = new ShapeFactory();
$rectangle = $factory->create('Rectangle');
$circle = $factory->create('Circle');



