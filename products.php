<?php
    class Product {

        protected $label = "prodotto generico";

        protected $type;

        protected $price;

    }

    class BeautyProducts extends Product {

        public function __construct(string $labelProduct, int $priceProduct)
        {
            $this->type = 'Beauty';
            $this->label = $labelProduct;
            $this->price = $priceProduct . '€';
        }

        public $skinType = 'normal';

        public $dayNight = 'day';

        
    }


    class TechProducts extends Product {

        public function __construct(string $labelProduct, int $priceProduct)
        {
            $this->type = 'Tech';
            $this->label = $labelProduct;
            $this->price = $priceProduct . '€';
        }

        private  $battery = true;

        public function setBattery( bool $value ) {
            $this->battery = $value;
        }

        public function getBattery(){
            return $this->battery;
        }

        
    }

    