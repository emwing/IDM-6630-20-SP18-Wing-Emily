<?php

  // echo "<h1>Check-In 3.2</h1> <br />";

  $queryArray = $_GET;

    // foreach ($queryArray as $keyName => $value) {
    //   echo $keyName;
    //   echo $value;
    // }

    foreach ($queryArray as $keyStatement => $bool) {

      if ($bool == false) {
        echo "The variable, " . $keyStatement . ", has a value of false.";
      } else {
        echo "The variable, " . $keyStatement . ", has a value of true.";
      }

    }

?>
