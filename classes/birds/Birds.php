<?php

    namespace classes\birds;

    abstract class Birds extends \classes\Goods implements \interfaces\BirdsInterface {
        protected $rich; 
        protected $habbitat;
        public function __construct($rich, $habbitat) {
            $this->rich = $rich;
            $this->habbitet = $habbitat;
        }
        public function makeSound() {
            echo $this->rich . ' говорит - "' . $this->sound . '"<br>';
        }
   }
