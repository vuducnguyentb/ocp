<?php


namespace App;


class Circle implements ShapeInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        // TODO: Implement area() method.
        return $this->radius * $this->radius * pi();
    }
}
