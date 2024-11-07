<?php

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function moveX($dx)
    {
        $this->x += $dx;
    }

    public function moveY($dy)
    {
        $this->y += $dy;
    }
}
