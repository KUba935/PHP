<?php
    // class Vehicle {
    //     public $type;

        
    // public function __construct($type) {
    //     $this->type = $type;
    // }

    // public function move(){
    //     return "brum";
    // }
        
    // }


    // class Car extends Vehicle {
    //     public $color;
    //     public function __construct($color, $type) {
    //         $this->color = $color;

    //         return parent::__construct($type);
    //     }
        
    //     public function move(){
    //         return "vruuum";
    //     }
    //     public function xd(){
    //         return parent::move();
    //     }
    // }

    // $toyota = new Car("biały","osobowy");

    // echo $toyota->move();
    // echo $toyota->xd();





    // class Animal {
    //     public $name;
    //     public $age;

    //     public function __construct($name, $age) {
    //         $this->name = $name;
    //         $this->age = $age;
    //     }

    //     public function eat(){
    //         return "Zwierze je";
    //     }
    // }

    // class Cat extends Animal {
    //     public function __construct($name, $age){
    //         return parent::__construct($name, $age);
    //     }

    //     public function eat(){
    //         return "Zwierze kocią karme";
    //     }
    // }

    // class Dog extends Animal {
    //     public function __construct($name, $age){
    //         return parent::__construct($name, $age);
    //     }

    //     public function eat(){
    //         return "Zwierze kość";
    //     }
    // }

    // $cat = new Cat("Gumball", 9);
    // $dog = new Dog("Wojtek", 6);
    // echo $cat->name. "<br>" ; 
    // echo $cat->age. "<br>" ;
    // echo $cat->eat(). "<br>" ;

    // echo $dog->name. "<br>" ;
    // echo $dog->age. "<br>" ;
    // echo $dog->eat();

    // class Employee {
    //     public $name;
    //     protected $salary; 

    //     public function __construct($name, $salary){
    //         $this->name = $name;
    //         $this->salary = $salary;
    //     }

    //     public function showInfo(){
    //         return "$this->name";
    //     }
    // }

    // class Manager extends Employee {
    //     public $department;


    //     public function __construct($name, $salary, $department){
    //         $this->deparment = $department;
    //         return parent::__construct($name, $salary);
    //     }

    //     public function showInfo(){
    //         return "$this->deparment - $this->salary - $this->name";
    //     }
    // }

    // $manager = new Manager("Jakub", 7000, "IT");
    // $manager->showInfo();
    // echo $manager->showInfo();

    // class Book {
    //     public $title;
    //     public $author;

    //     public function __construct($title, $author){
    //         $this->title = $title;
    //         $this->author = $author;
    //     }

    //     public function getInfo(){
    //         return "$this->title / $this->author";
    //     }
    // }

    // class Ebook extends Book {
    //     public $fileSize;

    //     public function __construct($title, $author, $fileSize){
    //         $this->fileSize = $fileSize;
    //         return parent::__construct($title, $author);
    //     }

    //     public function getInfo(){
    //         return "$this->title / $this->author / $this->fileSize";
    //     }
    // }

    // $ebook = new Ebook("PHP dla początkujących", "Jan Kowalski", 5);
    // $ebook->getInfo();
    // echo $ebook->getInfo();

    class Notification {
        public $messege;

        public function __construct($messege){
            $this->messege = $messege;
        }

        public function send(){
            return "$this->messege";
        }
    }


?>




