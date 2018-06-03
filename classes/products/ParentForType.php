<?php
namespace classes\products;
abstract class ParentForType extends \classes\Goods implements \interfaces\ProductInterface
{
    public $marka;
    public $title;
    public $price;
    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }
    public function setMark() 
    {
        $marka = explode(" ", $this->title);
        $this->marka = $marka[0];
        return $this->marka;
    }
    public function getPrint()
    {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
}