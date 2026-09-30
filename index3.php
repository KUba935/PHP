<?php
    class Placowka {
        public $adres;
        public $rok;
        private $dane;
        protected $password;

           public function __construct() {
                $this->adres = $adres;
                $this->rok = $rok;
                $this->dane = $dane;
                $this->pasword = $password;
           }

           public function getAdres() {
                return $this->adres;
           }
           public function setAdres() {
                $this->adres = $adres;
           }
           public function getRok() {
                return $this->rok;
           }
           public function setRok() {
                $this->rok = $rok;
           }
           public function getDane() {
                return $this->dane;
           }
           public function setDane() {
                $this->dane = $dane;
           }
           public function getPassword($login) {
             if ($login == "admin") {
                return $this->password;
             }
           }
           public function setPassword() {
                $this->password = $password;
           }

           public function __destruct() {
            
           }
    }
?>