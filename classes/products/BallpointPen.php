<?php

    namespace classes\products;

    class BallpointPen extends ParentForType {
        public $color;
        public function setPenColor($color)
        {
            $this->color = $color;
        }
    }
