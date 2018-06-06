<?php

    namespace classes;

    class Basket extends goods {
        public $countProduct = [];
        public function addProduct($product) { 
            if (!isset($product->numberProduct)) {
                $product->numberProduct = 1;
            }
            if(array_key_exists($product->title, $this->countProduct)) {
                $this->countProduct[$product->title]->numberProduct++;
                $count = $this->countProduct[$product->title]->numberProduct;
                echo "Товар $product->title добавлен в корзину (стало $count шт.)<br>";
             }
            else {
                $this->countProduct[$product->title] = $product;
                $count = $this->countProduct[$product->title]->numberProduct;
                echo "Товар $product->title добавлен в корзину (стало $count шт.)<br>";
            }
        }
        public function deleteAllProduct($product) { 
            echo $product->title . ' удалён';
            unset($this->countProduct[$product->title]);
        }
        public function deleteOneProduct($product) { 
            if(array_key_exists($product->title, $this->countProduct)) {
                if($this->countProduct[$product->title]->numberProduct > 0) {
                    $this->countProduct[$product->title]->numberProduct--;
                    $count = $this->countProduct[$product->title]->numberProduct;
                    echo "Товар $product->title удалён из корзины (осталось $count шт.)<br>";
                }
            }
        }
        public function showAllProduct() { 
            $resCountProduct = 0;
            foreach($this->countProduct as $key => $value) {
                echo 'Товар ' . $key . ', количество: ' . $value->numberProduct . '<br>';
                $resCountProduct = $resCountProduct + $value->numberProduct;
            }
            echo 'Общее количество товаров: ' . $resCountProduct; 
        }
        public function sum() { 
            $res = 0;
            foreach($this->countProduct as $key => $value) {
                $res = $res + ($value->price * $value->numberProduct);
            }
            return $res;
         }
    }
