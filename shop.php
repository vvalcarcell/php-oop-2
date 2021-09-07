<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, o
ppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce 
una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c); 
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php

    require_once('products.php'); 

    class Eshop {

        public $name; 
    
        public $address; 
        
        private $products=[];

        public function __construct(string $shopName, string $shopAddress)
        {
            $this->name = $shopName;
            $this->address = $shopAddress;   
        }

        public function addProduct(Product $productName) {
            $this->products[] = $productName;
        }
    
        public function getAnimals() {
            return $this->products;
        }



    }

    $myEshop= new Eshop('myEshop', 'via boh');

    $cremaViso= new BeautyProducts('crema viso', 12);

    $mouse= new TechProducts('mouse', 20);

    $myEshop->addProduct($cremaViso);
    $myEshop->addProduct($mouse);

    var_dump($myEshop);


        