 create un file index.php in cui:
- è definita una classe 'Movie’
=> all’interno della classe sono dichiarate delle variabili d’istanza
=> all’interno della classe è definito un costruttore
=> all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie’ e stampati a schermo i valori delle relative proprietà


<?php

#creo una  classe Movie
class Movie {

    #variabili
    public $title;
    public $text;
    public $year;
    public $author;
}

#creo istanza 1
$horror = new Movie();
$horror-> title = 'VAN HELSING';
$horror-> text = 'Horror, fantasy e azione: una ricetta semplice ma dal successo assicurato, quando lo chef è l\'abile Stephen Sommers e a dirigere le danze c\'è Logan-Hugh Jackman. Che la festa abbia inizio, dunque!';
$horror-> year = '2004';
$horror-> author = 'Stephen Sommers';
var_dump($horror);

#creo istanza 2
$thriller = new Movie();
$thriller-> title = 'HANNIBAL';
$thriller-> text = 'Il miliardario Mason Verger, unica vittima sopravvissuta, benché orrendamente sfigurato e storpio, vuole vendicarsi di Hannibal Lecter che vive a Firenze dove fa il bibliotecario erudito, mentre, pur denigrata e boicottata dall\'FBI, Clarice Starling continua a dargli la caccia.';
$thriller-> year = '2001';
$thriller-> author = 'Ridley Scott';
var_dump($thriller);


#creo istanza 3
$fantasy = new Movie();
$fantasy-> title = 'IL LABIRINTO DEL FAUNO';
$fantasy-> text = 'Spagna 1944. L\'esercito franchista sta piegando le ultime frange di resistenza alla "normalizzazione" del paese, ormai quasi totalmente sotto il controllo di Franco. Carmen, una giovane vedova, ha sposato Vidal, un capitano dell\'esercito, e lo raggiunge assieme alla figlia dodicenne Ofelia.';
$fantasy-> year = '2006';
$fantasy-> author = 'Guillermo Del Toro';
var_dump($fantasy);








?>