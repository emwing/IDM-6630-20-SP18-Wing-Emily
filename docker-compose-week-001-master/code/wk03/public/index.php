<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Intro to Anime: The Essential Short TV Series</title>

    <meta name="author" content="Emily Wing">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Average|Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">

  </head>
  <body>
    <div class="pageWrap">

      <?php
        include "inc/header-nav.php";

        // followed teacher-supplied code and modified as needed

        $section = $_GET['section'];
        $article = $_GET['article'];

        if (isset($section)) { // CHECK IF SECTION IS SET. IF NOT, INCLUDE HOME TEMPLATE
          if (file_exists("inc/sections/" . $section . "/section-template.php")) { // CHECK IF SET SECTION EXISTS. IF NOT, WARN USER
            if (isset($_GET['article'])) { // CHECK IF ARTICLE IS SET. IF NOT, INCLUDE SECTION TEMPLATE
              if (file_exists("inc/sections/" . $section . "\/articles\/" . $article . ".php")) { //CHECK IF SET ARTICLE EXISTS. IF NOT, WARN USER
                include 'inc/section-nav.php';
                include "inc/sections/" . $section . "\/articles\/" . $article . ".php";
              } else {
                echo "<p>Sorry, the article you're looking for does not exist.</p>";
              }
            } else {
              include 'inc/section-nav.php';
              include 'inc/sections/' . $section . '/section-template.php';
            }
          } else {
            echo "<p>Sorry, the section you're looking for does not exist.</p>";
          }
        } else {
          include "inc/top-template.php";
        }

        include "inc/footer.php";
      ?>

    </div> <!-- ends .pageWrap -->
  </body>
</html>
