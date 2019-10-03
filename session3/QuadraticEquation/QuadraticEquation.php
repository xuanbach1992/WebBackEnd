<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    public $r1;
    public $r2;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function getA()
    {
        return $this->a;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function getB()
    {
        return $this->b;
    }

    public function setC($c)
    {
        $this->c = $c;
    }

    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        $delta = ($this->b * $this->b) - (4 * $this->a * $this->c);
        return $delta;
    }

    function getRoot1()
    {
        $r1 = (-$this->b - sqrt($this->getDiscriminant())) / (2 * $this->a);
        return round($r1, 2);
    }

    function getRoot2()
    {
        $r2 = (-$this->b + sqrt($this->getDiscriminant())) / (2 * $this->a);
        return round($r2, 2);
    }

    public function result()
    {
        if ($this->getDiscriminant() < 0) {
            return "phuong trinh vo nghiem";
        } elseif ($this->getDiscriminant() == 0) {
            return "phuong trinh co 1 nghiem duy nhat la " . $this->getRoot1();
        } else {
            return "nghiem 1 la " . $this->getRoot1() . " va nghiem 2 la " . $this->getRoot2();
        }
    }

}