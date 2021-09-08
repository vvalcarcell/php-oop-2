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
    require_once('users.php'); 

    class Eshop {

        public $name; 
    
        public $address; 

        private $users=[];
        
        private $products=[];

        //construct

        public function __construct(string $shopName, string $shopAddress)
        {
            $this->name = $shopName;
            $this->address = $shopAddress;   
        }

        //funzioni set

        public function addProduct(Product $productName) {
            $this->products[] = $productName;
        }

        public function addUser(Users $user) {
            $this->users[] = $user;
        }

        function removeProduct (Product $productName) {

            $key = array_search($productName, $this->products);
            unset($this->products[$key]);
        }

        //funzione get
    
        public function getProductsList() {
            return $this->products;
        }

        public function getUsersList() {
            return $this->users;
        }



    }

    //creo l'e-shop
    $myEshop= new Eshop('myEshop', 'via boh');

    //creo i prodotti
    $cremaViso= new BeautyProducts('crema viso', 12);
    $mouse= new TechProducts('mouse', 20);

    //creo gli utenti/clienti
    $user1= new Users('valentina', 'valcarcell', 0123);
    $user2= new Users('federica', 'palma', 3210);

    //agiungo prodotti
    $myEshop->addProduct($cremaViso);
    $myEshop->addProduct($mouse);

    //aggiungo utenti
    $myEshop->addUser($user1);
    $myEshop->addUser($user2);

    //creo creditCard
    $creditCard1 = new CreditCard('valentina valcarcell', '8654474745', '01/01/01', 'MasterCard');

    //la assegno a user1
    $user1->setCreditCard($creditCard1);

    //user1 fa un acquisto
    $user1->buyProduct($mouse);

    var_dump($user1);




    // var_dump($myEshop);


        