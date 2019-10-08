<?php
include_once "Shape.php";
include_once "interfaceResizeable.php";
class Cicrle extends Shape implements Resizeable
{
    protected $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function get_Radius()
    {
        return $this->radius;
    }
    public function set_Radius($radius)
    {
        $this->radius = $radius;
    }
    public function get_Area()
    {
        return $this->radius * $this->radius * pi();
    }
    public function resize($value)
    {
        $this->radius = $value;   // TODO: Implement resize() method.
    }
}