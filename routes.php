<?php

class Route {
        private function formatUrl () {
          if (isset($_SERVER["PATH_INFO"])) {
            $url = $_SERVER["PATH_INFO"];
          }
          else {
            $url = "/";
          }
            $urlTrim = trim($url, "/");
            $urlTab = explode("/", $url);
            // echo $urlTab[1];
            return $urlTab;
        }


        public function getController () {

          // $this ->formatUrl() prend la valeur de ce que me renvoie la fonction.
          //donc elle prends la valeur de $urlTab;
          //Comme pour afficher tasks je dois afficher $this->formatUrl[1];

            $controller = $this->formatUrl()[1];

           require_once "./controllers/tasks.php";
    // c'est pareil que :  require "./controllers/tasks.php";
        }
    }

 ?>
