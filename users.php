<?php
    class Users {
        private $name;
        private $surname;
        private $address;
        private $creditCard;
        private $passWord;
        private $orders =[];
        private $payments = [];

    
        public function __construct(string $name, string $surname, int $passWord) {
            $this->name =$name;
            $this->surname=$surname;
            $this->passWord=$passWord;
        }
    
        public function setAddress (string $address) {
            $this->address = $address;
        }

        public function getAddress (){
            return $this-> address;
        }
    
        public function setCreditCard ( CreditCard $creditCard) {
            $this->creditCard= $creditCard;
        }

        public function getCreditCard (){
            return $this-> creditCard;
        }

        public function buyProduct(Product $produtc) {
            $this-> products[]= $product;
            $this-> payments[]= $product->price;
        }

        public function getOrders (){
            return $this-> orders;
        }

        public function getPayments (){
            return $this-> payments;
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

        function __construct(string $name, string $number, string $date, string $type) {
            $this-> nameOnTheCard= $name;
            $this-> number= $number;
            $this-> expiration= $date;
            $this-> type = $date;
        }



    }