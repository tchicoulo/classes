<?php

echo "tu as bien chargé tasks.php<br />";

require_once "models/tasks.php";

// On va instancier notre TaskModel
$tasks = new TaskModel();
// $taskListView = $tasks->getAll();


$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {
$taskListView = $tasks->getAll();
}else if($method == "POST") {
  $taskListView = $tasks->createOne();
} else {
  echo "error";
}

require_once "views/tasks.php";

 ?>
