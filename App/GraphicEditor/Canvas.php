<?php

namespace GraphicEditor;

use GraphicEditor\Shapes\ShapeBase;
use GraphicEditor\ShapeFormatter;

/**
 * This is an extra class to simulate a canvas and will be the manager and holder of the shapes
*/
class Canvas
{

    /***
     * An array of all current shapes in the canvas
     * @var array
     */
    private $shapes = [];


    /**
     * Draws a Shape in the canvas
     * @param ShapeBase $shape
     */
    public function drawShape(ShapeBase $shape)
    {
        //first calculates the shape
        $this->shapes[] = $shape;
        $shape->calculateShape();

        //then draw the shape
        ShapeFormatter::printShape($shape); //sends it to the screen


    }

    /***
     * This method accepts an array of shapes to draw them in the canvas
     * @param $aShapes
     */
    public function drawShapes(array $aShapes)
    {
    	//parses all shapes in the array
        foreach ($aShapes as $shape )
        {
            $classShape = "GraphicEditor\\Shapes\\" . ucfirst($shape['type']);
            if (class_exists($classShape))
            {
                //instance the shape and set all params
                $oShape = new  $classShape();
                foreach ($shape['params'] as $keyParam=>$valueParam)
                {
                    $param = "set" . ucfirst($keyParam);
                    $oShape->$param($valueParam);
                }

                //draw shape
                $this->drawShape($oShape);
            }
        }
    }

}


