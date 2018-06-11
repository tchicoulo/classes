<?php

  require_once $app."/database/model.php";

  class TaskModel extends Model {

    public function getAll () {

      $db = parent::connect();
      $sql = 'select * from tasks';
      $query = $db->prepare($sql);
      $query->execute();
      $tasks = $query->fetchAll();
      return $tasks;

    }

  }
?>