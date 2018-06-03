<?php
namespace classes;
class Basket extends goods
{
    public $countProduct = [];
    public function addProduct($product){ // добавляем продукт в корзину
        if (!isset($product->numberProduct)) {
            $product->numberProduct = 1;
        }
        if(array_key_exists($product->title, $this->countProduct)){
            $this->countProduct[$product->title]->numberProduct++;
            $count = $this->countProduct[$product->title]->numberProduct;
            echo "Товар $product->title добавлен в корзину (стало $count шт.)<br>";
        }
        else{
            $this->countProduct[$product->title] = $product;
            $count = $this->countProduct[$product->title]->numberProduct;
            echo "Товар $product->title добавлен в корзину (стало $count шт.)<br>";
        }
    }
    public function deleteAllProduct($product){ //убрать все продукты по названию из корзины
        echo $product->title . ' удалён';
        unset($this->countProduct[$product->title]);
    }
    public function deleteOneProduct($product){ //убрать 1 одинаковый продукт
        if(array_key_exists($product->title, $this->countProduct)){
            // echo $this->countProduct[$product->title]->numberProduct . '<br>';
            if($this->countProduct[$product->title]->numberProduct > 0){
                $this->countProduct[$product->title]->numberProduct--;
                $count = $this->countProduct[$product->title]->numberProduct;
                echo "Товар $product->title удалён из корзины (осталось $count шт.)<br>";
            //    echo $this->countProduct[$product->title]->numberProduct . '<br>';
            }
        }
    }
    public function showAllProduct(){ //показываем список продуктов в корзине 
        $resCountProduct = 0;
        foreach($this->countProduct as $key => $value){
            echo 'Товар ' . $key . ', количество: ' . $value->numberProduct . '<br>';
            $resCountProduct = $resCountProduct + $value->numberProduct;
        }
        echo 'Общее количество товаров: ' . $resCountProduct;
        
    }
    // хммм как сделать чтобы продукт не отображался в итоге если его количество составляет 0 ??
    public function sum(){ //подсчитываем общую сумму продукта
        $res = 0;
        foreach($this->countProduct as $key => $value){
            $res = $res + ($value->price * $value->numberProduct);
        }
        return $res;
    }
}