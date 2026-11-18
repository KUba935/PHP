<?php
interface Renderable{
    public function render();
}

class HtmlElement implements Renderable{
    public $element;
    public function __construct($element){
        $this->element = $element;
    }
}

interface JsonSerializable{

}

interface Drivable{
    public function drive();
}

class Car implements Drivable{

}
class Bike implements Drivable{

}
class Product implements Drivable{
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }

    public function da(){
        return [$this->name];
    }
}


?>
