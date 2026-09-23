<?php
    class Person {
        public $name;
        public $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
            echo "Roman $name/n";
        }


    }

    $person = new Person("Dean", 20);
    echo get_class($person);
?>

<?php
    class Wojownik {
        public $luk;
        public $miecz;

        public function __construct($luk, $miecz) {
            $this->luk = $luk;
            $this->miecz = $miecz;
            echo "Wojownik $luk i $miecz";
        }
    }
    $wojownik = new Wojownik("Kuba 20", "Cos");
    echo get_class($wojownik);
?>