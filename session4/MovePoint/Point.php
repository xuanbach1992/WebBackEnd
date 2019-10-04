<?php


class Point2D
{
    protected $x;
    protected $y;

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        return array($this->x, $this->y);
    }

    public function toString()
    {
        echo "<br>Toa do x= " . $this->x . " va y= " . $this->y . "<br>";
    }
}