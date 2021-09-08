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

        public function buyProduct(Product $product, Eshop $eShop) {
            $eShop-> removeProduct($product);
            $this-> orders[]= $product;
            $this-> payments[]= $product->getPrice();
        }

        public function getOrders (){
            return $this-> orders;
        }

        public function getPayments (){
            return $this-> payments;
        }
    
    }

    class PremiumUsers extends Users {
        public $discount= 0.2 ;
        public function buyProduct2(Product $product, Eshop $eShop) {
            $eShop-> removeProduct($product);
            $this-> orders[]= $product;
            $discount2= $product->getPrice() * $this->discount;
            $this-> payments[]= $product->getPrice() - $discount2 ;
        }
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