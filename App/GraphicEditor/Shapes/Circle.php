<?php

namespace GraphicEditor\Shapes;
use Helpers\ArrayHelper;

/***
 * Circle shape square
 * Class CircleShape
 * @package GraphicEditor\Shapes
 */
class Circle extends ShapeBase
{

	/***
	 * Radius of the circle
	 * @var int
	 */
    private $radius = 0;


    /***
     * Sets the value for radius
     * @param $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /***
     * Return the radius of the circle
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }


    /***
	 * here we should calculate the shape of circle, for know we just create empty values
     * @return string
     */
    public function calculateShape()
    {

        echo "Calculating a circle with radius " . $this->getRadius() . " color " . $this->getColor() . " and border Size " . $this->getBorderSize() . "...\n";
        $this->data = ArrayHelper::array_fill_neg(-$this->radius,$this->radius);
        for ($x = -$this->radius; $x < $this->radius; $x++) {
            if ($x==-$this->radius)
                $this->data[$x] = ArrayHelper::array_fill_neg(-$this->radius,$this->radius,[]);
            for ($y = -$this->radius; $y < $this->radius; $y++) {
				$this->data[$x][$y] = ''; //here we should implement the shape of the CIRCLE
            }
        }
        sleep(1); //simulating
    }

}