<?php
class Circle
{
    public $name;
    public $radius;
    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }
    public function get_Name()
    {
        return $this->name;
    }
    public function set_Name($name)
    {
        $this->name = $name;
    }
    public function get_Radius()
    {
        return $this->radius;
    }
    public function set_Radius($radius)
    {
        $this->radius = $radius;
    }
}
?>