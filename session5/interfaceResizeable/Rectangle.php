<?php
include_once "Shape.php";
include_once "interfaceResizeable.php";
class Rectangle extends Shape implements Resizeable
{
    protected $height;
    protected $width;
    public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }
    public function get_Height()
    {
        return $this->height;
    }
    public function set_Height($height)
    {
        $this->height = $height;
    }
    public function get_Width()
    {
        return $this->width;
    }
    public function set_Width($width)
    {
        $this->width = $width;
    }
    public function get_Area()
    {
        return $this->width*$this->height;
    }
    public function resize($value)
    {
        $this->height = $value; // TODO: Implement resize() method.
    }
}