<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Call Lego Batman</title>

    <meta name="author" content="Emily Wing">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Bungee|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/css.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js">  </script>
  </head>
  <body>
    <div class="pageWrap">
      <nav id="mainNav">
        <?php include "../inc/nav.php"; ?>
      </nav>

      <div id="mainContact">
        <img src="../img/lego-bat-signal-sky.png" alt="Lego Batman" id="signal" class="hide">
        <div class="container">
          <img src="../img/lego-bat-signal-button.png" alt="Lego Batman" id="buttonImg">
          <?php echo "<h1>Flip the switch to the Bat-Signal!</h1>"; ?>
        </div>
      </div>

    </div> <!-- ends .pageWrap -->

    <script src="../js/script.js"></script>

  </body>
</html>
