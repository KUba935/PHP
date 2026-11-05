<?php
    class Vehicle {
        public $type;

        
    public function __construct($type) {
        $this->type = $type;
    }

    public function move(){
        return "brum";
    }
        
    }


    class Car extends Vehicle {
        public $color;
        public function __construct($color, $type) {
            $this->color = $color;

            return parent::__construct($type);
        }
        
        public function move(){
            return "vruuum";
        }
        public function xd(){
            return parent::move();
        }
    }

    $toyota = new Car("biały","osobowy");

    echo $toyota->move();
    echo $toyota->xd();

?>
