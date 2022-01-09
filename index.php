 create un file index.php in cui:
- è definita una classe 'Movie’
=> all’interno della classe sono dichiarate delle variabili d’istanza
=> all’interno della classe è definito un costruttore
=> all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie’ e stampati a schermo i valori delle relative proprietà


<?php

#creo una  classe Movie
class Movie {

    #variabili   //fai un modello che rispecchia poi in tutti le stesse proprietà,aggiungendone una si aggiornano tutte
    public $title;
    public $text;
    public $year;
    public $author;
    public $price;

    #creo un metodo 
    public function getYear($year) {
        $this->year = $year;
    }
    public function getHire($price) {
        $this->price = $price;
    }
    
    #costruttore
    function __construct($title, $author){

    }
}
}



#creo istanza 1
$horror = new Movie();
$horror-> title = 'VAN HELSING';
$horror-> text = 'Horror, fantasy e azione: una ricetta semplice ma dal successo assicurato, quando lo chef è l\'abile Stephen Sommers e a dirigere le danze c\'è Logan-Hugh Jackman. Che la festa abbia inizio, dunque!';
$horror-> author = 'Stephen Sommers';
var_dump($horror);

#stampare a schermo le relative proprietà
echo $horror-> title;
echo $horror-> text;
echo $horror-> author;

#prendo la data e richiamo il metodo
$horror-> getYear(2004);
$horror-> getHire(3,50); 




#creo istanza 2
$thriller = new Movie();
$thriller-> title = 'HANNIBAL';
$thriller-> text = 'Il miliardario Mason Verger, unica vittima sopravvissuta, benché orrendamente sfigurato e storpio, vuole vendicarsi di Hannibal Lecter che vive a Firenze dove fa il bibliotecario erudito, mentre, pur denigrata e boicottata dall\'FBI, Clarice Starling continua a dargli la caccia.';
$thriller-> author = 'Ridley Scott';
var_dump($thriller);

#stampare a schermo a schermo
echo $thriller-> title;
echo $thriller-> text;
echo $thriller-> author;

$thriller-> getYear(2001);
$thriller-> getHire(5,00);



#creo istanza 3
$fantasy = new Movie();
$fantasy-> title = 'IL LABIRINTO DEL FAUNO';
$fantasy-> text = 'Spagna 1944. L\'esercito franchista sta piegando le ultime frange di resistenza alla "normalizzazione" del paese, ormai quasi totalmente sotto il controllo di Franco. Carmen, una giovane vedova, ha sposato Vidal, un capitano dell\'esercito, e lo raggiunge assieme alla figlia dodicenne Ofelia.';
$fantasy-> author = 'Guillermo Del Toro';
var_dump($fantasy);

#stampare a schermo 
echo $fantasy-> title;
echo $fantasy-> text;
echo $fantasy-> author;

$fantasy-> getYear(2006);
$fantasy-> getHire(4,50);


?>