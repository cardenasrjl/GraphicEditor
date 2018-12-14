<?php

namespace GraphicEditor\Shapes;

/***
 * Square shape class
 * Class SquareShape
 * @package GraphicEditor\Shapes
 */
class Square extends ShapeBase
{
    /***
     * side Size of the square
     * @var int
     */
    private $size = 0 ;


    /***
     * Sets the size of the square
     * @param $size
     */
    public function setSize($size)
    {
            $this->size = $size;
    }

    /***
     * Returns the size of the square
     * @param $size
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }


    /***
     * Sorry, I implemented this, it is simple just to have a demonstration
     * @return string
     */
    public function calculateShape(){
        echo  "calculating a square shape with size ". $this->size ." color " . $this->getColor() . " and border Size " . $this->getBorderSize() . " .... \n";

        $this->data = array_fill(0,$this->size,[]);
        for ($x=0;$x<$this->size;$x++)
        {
            if ($x==0)
                $this->data[$x] = array_fill(0,$this->size,[]);
            for($y=0;$y<$this->size;$y++)
            {
				$this->data[$x][$y] = ' ';
                if ($x == 0 || $y==0 || $x == ($this->size-1) || $y==($this->size-1))
                    $this->data[$x][$y] = '*';
            }
        }
        sleep(1); //simulating calculation
    }


}