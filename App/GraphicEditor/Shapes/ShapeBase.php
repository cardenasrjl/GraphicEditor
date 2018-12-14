<?php

namespace GraphicEditor\Shapes;

/***
 * Shape base to work as a contract for other shapes, if any other shape has to be created extend it using this class
 * Class ShapeBase
 * @package GraphicEditor\Shapes
 */
abstract class ShapeBase
{

    /***
     * This is a Matrix of '*' and ' ', this are the two chars to generate the shapes
     * @var
     */
    protected $data ;

    /***
     * Shape Color By default black
     * @var string
     */
    private $color = 'black';

    /***
     * Border size
     * @var int  by default 0
     */
    private $borderSize = 0;

    /**
     * Sets the color of the shape
     * @param $color
     */
    public function setColor($color)
    {
        $this->color  = $color;
    }

    /***
     * Returns the color of the shape
     */
    public function getColor()
    {
        return $this->color;
    }


    /***
     * Returns the border size of the shape
     */
    public function getBorderSize()
    {
        return $this->borderSize;
    }


    /***
     * Sets the border size
     * @param $borderSize
     */
    public function setBorderSize($borderSize)
    {
        $this->borderSize = $borderSize;
    }


    /***
     * Returns the data of the shape
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /***
     * Sets the data of the shape
     * @param array $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }


    /***
     * To catch some possible errors
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        echo "The shape class " . __CLASS__ . " has not implemented the method " .  $name . "\n";
    }


    /***
     * Method to make the calculations of the shape
     * @return mixed
     */
    abstract function  calculateShape();

}