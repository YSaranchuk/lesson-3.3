<?php
namespace classes\products;
class Car extends ParentForType implements \interfaces\CarInterface
{
    public $power = 150;
    public $type = 'Car';
    public function setCarPower($hp)
    {
        $this->power = $hp;
    }
}