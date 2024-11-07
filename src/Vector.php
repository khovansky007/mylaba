<?php

class Vector
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function length()
    {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    public function isZero()
    {
        return $this->x == 0 && $this->y == 0;
    }

    public function isPerpendicularTo(Vector $vector)
    {
        return $this->x * $vector->x + $this->y * $vector->y == 0;
    }
}
