<?php

    namespace classes;

    class Order extends Basket
    {
        public function setOrder($basket)
        {
            if (isset($basket)) 
            {
                $this->countProduct = $basket->countProduct;
                echo 'Создан заказ:<br>';
            }
            else 
            {
                echo 'Ошибка при создании заказа';
            }
        }
        public function showAllProduct()
        { 
            $resCountProduct = 0;
            foreach($this->countProduct as $key => $value)
            {
                echo '<li>'  . $key . ' - ' . $value->numberProduct . ' шт., по ' . $value->price . ' руб.</li>';
            $resCountProduct = $resCountProduct + $value->numberProduct;
            }
            $sum = parent::sum();
            echo 'Итого к оплате: ' . $sum . 'рублей.';
         }
    }
