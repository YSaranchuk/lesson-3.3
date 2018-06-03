<?php
namespace classes\Products;
class TV extends ParentForType
{
    public $resolution = '4K';
    public $color = 'black';
    public function setTVResolution($resolution)
    {
        $this->resolution = $resolution;
    }
}