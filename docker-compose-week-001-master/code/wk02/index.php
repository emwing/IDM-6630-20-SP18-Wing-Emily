<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Emily's Favorite Movies</title>

    <meta name="author" content="Emily Wing">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.css">

  </head>
  <body>
    <div class="pageWrap">
      <header>
        <?php echo "<h1>Emily's Favorite Movies</h1>"; ?>
        <?php echo "<h2>A list of her go-to movies for inspiration, comfort, and entertainment.</h2>"; ?>
      </header>

      <div id="movieContainer">

        <?php
        // define individual movie arrays
        $movieA = array(
          "title"=>"Final Fantasy VII: Advent Children Complete",
          "imdbURL"=>"http://www.imdb.com/title/tt0385700/",
          "year"=>2009,
          "rating"=>33,
          "genre"=>"Action & Adventure",
          "poster"=>"img/finalFantasyVIIACC.jpg"
        );

        $movieB = array(
          "title"=>"Kimi ni Todoke",
          "imdbURL"=>"http://www.imdb.com/title/tt1632544/?ref_=nv_sr_2",
          "year"=>2010,
          "rating"=>"n/a",
          "genre"=>"Art House & International",
          "poster"=>"img/kimiNiTodokePoster.jpg"
        );

        $movieC = array(
          "title"=>"Princess Mononoke",
          "imdbURL"=>"http://www.imdb.com/title/tt1632544/?ref_=nv_sr_2",
          "year"=>1999,
          "rating"=>92,
          "genre"=>"Action & Adventure",
          "poster"=>"img/princessMononokePoster.jpg"
        );

        $movieD = array(
          "title"=>"Summer Wars",
          "imdbURL"=>"http://www.imdb.com/title/tt1474276/?ref_=nv_sr_1",
          "year"=>2009,
          "rating"=>77,
          "genre"=>"Action & Adventure",
          "poster"=>"img/summerWarsPoster.jpg"
        );

        $movieE = array(
          "title"=>"Tokyo Godfathers",
          "imdbURL"=>"http://www.imdb.com/title/tt0388473/?ref_=nv_sr_1",
          "year"=>2003,
          "rating"=>90,
          "genre"=>"Animation",
          "poster"=>"img/tokyoGodfathersPoster.jpg"
        );

        // define master movie array
        $movieList = array();

        // run array_push function to add movie arrays to list
        array_push($movieList, $movieA, $movieB, $movieC, $movieD, $movieE);

        // test master movie array
        // print_r($movieList);

        foreach($movieList[0] as $data) {
          echo $data;
        }


/*
        // define function to create individual movie list
        function makeMovieList() {
          foreach($movieList as $currentMovie) {
            makeOneList($currentMovie);
          }
        }

        // define function to run makeMovieList for each movie
        function makeOneList($moviesToList) {
          echo $moviesToList["<p></p>"]
        }
*/
        ?>

      </div> <!-- ends #movieContainer -->

    </div> <!-- ends .pageWrap -->
  </body>
</html>
