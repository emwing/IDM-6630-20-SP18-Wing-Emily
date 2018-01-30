<?php

  // echo "<h1>Check-In 3.1</h1> <br />";
  echo "<ul>";

  $queryArray = $_GET;

    foreach ($queryArray as $keyName => $value) {
      echo "<li>" . $keyName . ": ";
      echo $value . "</li>";
    }

  echo "</ul>";

?>
