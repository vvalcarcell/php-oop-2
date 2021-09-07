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
            $this->price = $priceProduct;
        }

        
    }

    