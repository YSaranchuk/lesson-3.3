<?php

    namespace classes\products;

    class Car extends ParentForType implements \interfaces\CarInterface
    {
        public $power = '300 лошадиных сил';
        public $type = 'Car';
        public function setCarPower($horp)
        {
           $this->power = $horp;
        }
    }
