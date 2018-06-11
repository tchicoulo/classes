<?php

echo "tu as bien chargé tasks.php<br />";

require_once "models/tasks.php";

// On va instancier notre TaskModel
$tasks = new TaskModel();

$taskListView = $tasks->getAll();

require_once "views/tasks.php";

 ?>
