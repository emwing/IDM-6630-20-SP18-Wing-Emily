<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Check In 2.2: Loops</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <?php
    // define the array
      $myDogSuki = array("Suki","Shiba Inu","white",6,22.5);

    // define the function
      function walkTheDog($arrayToList){
        echo "<ul>";
        foreach ($arrayToList as $value) {
          echo "<li>$value</li>";
        }
        echo "</ul>";
      }

    // run the function with the array specified
      walkTheDog($myDogSuki);
    ?>
  </body>
</html>
