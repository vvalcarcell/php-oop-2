<?php
    class Users {
        private $name;
        private $surname;
        private $address;
        private $creditCard;
        private $passWord;

    
        function __construct(string $name, string $surname, int $passWord) {
            $this->name =$name;
            $this->surname=$surname;
            $this->passWord=$passWord;
        }
    
        function setAddress (string $address) {
            $this->address = $address;
        }
    
        function setCreditCard ( string $creditCard) {
            $this->creditCard= $creditCard;
        }
    
    }

    class PremiumUsers extends Users {
        public $discount= 20;
    }