<?php

// ON VA FAIRE LES REQUETES ICI

require_once "./models/model.php";

class TaskModel extends Model {

  public function getAll() {
    $db = parent::connect(); //return $db
    //$db va nous permettres de faire toutes nos requetes sur notre base de donnée
    $sql = "select * from tasks";
    $query = $db-> prepare($sql);
    $query-> execute();

    $taskList = $query->fetchAll();
    // ['name' => 'acheter tomates', 'name' => 'passer l'aspirateur'];

    //taskListView va être égal au $tasklist renvoyé par ma méthode $tacks->getAll();

    return $taskList;
  }


public function createOne() {

    $db = parent::connect(); //return $db
    //$db va nous permettres de faire toutes nos requetes sur notre base de donnée
    $name = $_POST['add'];
    $add = "INSERT INTO tasks(name) VALUES (:name)";
    $query = $db->prepare($add);
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->execute();

     return $this->getAll();

            }
        }
