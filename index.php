Hello World !

<?php

// Une classe peut avoir des variables et des fonctions
// ces variables et fonctione peuvent etre :
// public ( accessible à tout autres classes )
// private (accessible a elle meme)
// protected (accessible a elle meme et ses enfants)
echo "<h1>LOGS</h1>";

class Vehicule {
  public $marque = "";

public function rouler () {
    echo "Je roule...<br />";
  }
}

// O peut aussi peremettre à une autre classe qu'on déclare, d'hériter
class Auto extends Vehicule {
  function nombreDeRoue () {
    echo "j'ai 4 roues<br />";
  }
}

class Moto extends Vehicule {
  function nombreDeRoue () {
    echo "j'ai 2 roues<br />";
  }
}

// On va pouvoir instancier notre classe en l'attribuant avec le mot new et en l'attribuant a une variable.

$vehiculeOrdinaire = new Vehicule();

$auto = new Auto ();

$moto  = new Moto();

// Les instances ont acces au methodes de notre classes

$vehiculeOrdinaire->rouler ();
$auto->rouler();
$auto->nombreDeRoue();
$moto->nombreDeRoue();

require_once "server.php";


?>
