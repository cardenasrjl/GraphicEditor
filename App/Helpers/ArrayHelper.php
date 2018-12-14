<?php

namespace Helpers;

/***
 * Class to help with arrays
 * Class ArrayHelper
 * @package Helpers
 */
Class ArrayHelper
{

    /***
     * Array_fill doesn't work with negatives, I need to create one, to generate a shape
     * @param $start - index start
     * @param $total - last index value
     * @return array
     */
    public static function array_fill_neg($start, $total)
    {
        $arrData = [];
        for ($i = $start; $i< $total; $i++)
        {
            $arrData[$i] =   [];
        }
        return $arrData;
    }

}