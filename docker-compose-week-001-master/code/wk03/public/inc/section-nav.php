<nav id="sectionNav">
  <ul>
    <?php

      $section = $_GET['section'];

      echo "<li><a href='?section=" . $section . "&article=plot'>Plot</a></li>";
      echo "<li><a href='?section=" . $section . "&article=characters'>Characters</a></li>";
      echo "<li><a href='?section=" . $section . "&article=episodes'>Episodes</a></li>";

    ?>
  </ul>
</nav>
