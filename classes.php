<?php 


class Animal {
    public $name;
    public $age;
    public $eyeColor;

    public function __construct($name, $age, $eyeColor) {
        $this->name = $name;
        $this->age = $age;
        $this->eyeColor = $eyeColor;
    }

    public function getName()
    {
        return $this->name;
    }
}