<?php
abstract class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function speak();

    public function describe() {
        return "To zwierzę ma na imię" . $this->name;
    }
}

class Cat extends Animal {
    public function speak(){
        return"xd";
    }

    public function __construct($name){
        parent::__construct($name);
    }
}

$cat = new Cat("Puszek","robi coś");
echo $cat->speak();
echo $cat->decribe();