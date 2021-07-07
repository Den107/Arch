<?php


namespace hw5\adapter\main;

use hw5\adapter\interfaces\ISquare;
use hw5\adapter\libs\SquareAreaLib;

class SquareAdapter implements ISquare
{

    function squareArea(int $sideSquare): float
    {
        $diagonal = sqrt(2) * $sideSquare;
        $squareArea = new SquareAreaLib();
        return $squareArea->getSquareArea($diagonal);
    }
}
