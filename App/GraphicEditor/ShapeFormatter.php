<?php

namespace GraphicEditor;
use GraphicEditor\Shapes\ShapeBase;


/***
 * Class responsible to format our shapes including sending to screen, if any new format is needed just add it here
 * Interface ShapeFormatter
 * @package GraphicEditor\Shapes
 */
class ShapeFormatter
{
    /***
     * Returns the shape data in points array format to send to screen
     * @param ShapeBase $shape
     * @return array
     */
    public static function pointsArray(ShapeBase $shape)
    {
        $i =0;
        $aSize = count($shape->getData());
        $pointsArray =array_fill(0,$aSize*$aSize+$aSize,'');
        foreach ($shape->getData() as $xy) {
            foreach ($xy as $val) {
                $pointsArray[$i] = $val;
                $i++;
            }
            $pointsArray[$i] = "\n";
            $i++;
        }

        return $pointsArray;
    }

    /***
     * returns the shape in binary string
     * @param ShapeBase $shape
     * @return string
     */
    public static function binaryData(ShapeBase $shape)
    {
        return pack($shape->getData());
    }


    /***
     * Sends the shape to the screen
     * @param ShapeBase $shape
     */
    public static function printShape(ShapeBase $shape)
    {
    	echo "Here we should see a " . get_class($shape) . "\n";
        foreach (self::pointsArray($shape) as $point)
            echo $point ;
    }



}
