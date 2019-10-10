<?php


class User
{
    public $name;
    public $address;
    public $phone;
    public $role;

    public function __construct($name, $address, $phone, $role)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->role = $role;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function setAddress($address)
    {
        $this->address = $address;
    }


    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function getPhone()
    {
        return $this->phone;
    }

    public function getRole()
    {
        return $this->role;
    }
}