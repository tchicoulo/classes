<?php

echo "Ma view est bien chargée";
echo "<h1>VIEW</h1>";

foreach ($taskListView as $task) {
  echo "<br />-".$task["name"];
}

 ?>

<form action="http://localhost/classes/index.php/models/tasks.php" method="post">

  <input type="text" name="add" value="">
  <button type="submit" name="button">Submit</button>

</form>
