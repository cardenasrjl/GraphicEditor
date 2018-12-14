<?php

include_once("App/autoload.php");

use GraphicEditor\Canvas;
use GraphicEditor\Shapes\Square;
use GraphicEditor\Shapes\Circle;

//input as an array
$shapes = [['type' => 'Circle', 'params' => ['color' => 'blue', 'BorderSize' => 3, 'radius' => 2, 'size'=>10]],
    ['type' => 'Square', 'params' => ['color' => 'brown', 'BorderSize' => 4, 'size' => 2]],
    ['type' => 'Square', 'params' => ['color' => 'purple', 'BorderSize' => 4, 'size' => 2]],
    ['type' => 'Circle', 'params' => ['color' => 'green', 'BorderSize' => 4, 'radius' => 2]],
    ['type' => 'Rectangle', 'params' => ['color' => 'yellow', 'BorderSize' => 4, 'size'=>2]], //not implemented shape
    ['type' => 'Square', 'params' => ['color' => 'yellow', 'BorderSize' => 4, 'size'=>5]]
];


//add by array
$canvas = new Canvas();
$canvas->drawShapes($shapes); //sends all figures to the canvas


//add single square
$square = new Square();
$square->setSize(20);
$square->setColor('green');
$square->setBorderSize(10);
$canvas->drawShape($square); //draw the figure in the canvas

//add single circle
$circle = new Circle();
$circle->setRadius(20);
$circle->setColor('green');
$circle->setBorderSize(10);
$canvas->drawShape($circle); //draw the figure in the canvas


