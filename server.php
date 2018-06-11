Hello World !

<?php

$app = __DIR__;

echo $app."<br />";

//Nous permettre de récuperer notre classe route
require_once "routes.php";

$route = new Route();
$route->getController();

 ?>
