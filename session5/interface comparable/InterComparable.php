<?php
include_once "Circle.php";
include_once "Compare.php";
class alpha extends Circle implements Compare
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }
    public function Sort($cicrleAll)
    {
        $circleRadius = $cicrleAll->get_Radius();
        if ($this->get_Radius() > $circleRadius) {
            return 1;
        } elseif ($this->get_Radius() < $circleRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}