<?php


class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show(){
        return "hello world, toi la hình dạng, tên là $this->name";
    }
}