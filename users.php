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
    
        function setCreditCard ( CreditCard $creditCard) {
            $this->creditCard= $creditCard;
        }
    
    }

    class PremiumUsers extends Users {
        public $discount= 20;
    }

    class CreditCard{
        private $nameOnTheCard;
        private $number;
        private $expiration;
        private $type;

        function __construct(string $name, int $number, string $date, string $type) {
            $this-> nameOnTheCard= $name;
            $this-> number= $number;
            $this-> expiration= $date;
            $this-> type = $date;
        }



    }