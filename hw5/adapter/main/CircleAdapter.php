<?php


namespace hw5\adapter\main;

use hw5\adapter\interfaces\ICircle;
use hw5\adapter\libs\CircleAreaLib;

class CircleAdapter implements ICircle
{

    function circleArea(int $circumference)
    {
        $diagonal = $circumference / M_PI;
        $circleArea = new CircleAreaLib();
        return $circleArea->getCircleArea($diagonal);
    }
}
