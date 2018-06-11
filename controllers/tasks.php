<?php

  require_once $app."/database/tasks.php";

  class TaskController extends TaskModel {

    public function getTasks () {
      $tasks = parent::getAll();
      global $app;
      $content = $app."/views/tasks.php";
      require_once $app."/views/layout.php";
    }

  }

  $tasks = new TaskController();

  global $route;
  $method = $route->getMethod();

  switch ($method) {
    case "GET":
        $tasks->getTasks();
        break;
  }

?>