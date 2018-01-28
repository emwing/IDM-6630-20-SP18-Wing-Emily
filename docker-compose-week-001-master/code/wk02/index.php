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
          "phpName"=>"\$movieA",
          "title"=>"Final Fantasy VII: Advent Children Complete",
          "imdbURL"=>"http://www.imdb.com/title/tt0385700/",
          "year"=>2009,
          "rating"=>33,
          "genre"=>"Action & Adventure",
          "poster"=>"img/finalFantasyVIIACC.jpg"
        );

        $movieB = array(
          "phpName"=>"\$movieB",
          "title"=>"Kimi ni Todoke",
          "imdbURL"=>"http://www.imdb.com/title/tt1632544/?ref_=nv_sr_2",
          "year"=>2010,
          "rating"=>"n/a",
          "genre"=>"Art House & International",
          "poster"=>"img/kimiNiTodokePoster.jpg"
        );

        $movieC = array(
          "phpName"=>"\$movieC",
          "title"=>"Princess Mononoke",
          "imdbURL"=>"http://www.imdb.com/title/tt1632544/?ref_=nv_sr_2",
          "year"=>1999,
          "rating"=>92,
          "genre"=>"Action & Adventure",
          "poster"=>"img/princessMononokePoster.jpg"
        );

        $movieD = array(
          "phpName"=>"\$movieD",
          "title"=>"Summer Wars",
          "imdbURL"=>"http://www.imdb.com/title/tt1474276/?ref_=nv_sr_1",
          "year"=>2009,
          "rating"=>77,
          "genre"=>"Action & Adventure",
          "poster"=>"img/summerWarsPoster.jpg"
        );

        $movieE = array(
          "phpName"=>"\$movieE",
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

        // function to loop through movies to make each list (from teacher)
// *** DOESN'T WORK BECAUSE FUNCTION PULLS ARRAY, NOT ARRAY VARIABLE NAME ***
        // function createMovieLists() {
           // makeOneMovieList($movieList as $currentMovie); // *** $currentMovie = "array", not "$movieA", which is what makeOneMovieList needs to work ***
           // makeOneMovieList($currentMovie);
         // }
        // }

        // test to get individual movie array variable for use in loop
// *** DIDN'T WORK, RESULTED IN "$" EVERYWHERE ***
        // $array_phpName = array_column($movieList,'phpName');
        // foreach($array_phpName as $value) {
        //   makeOneMovieList($value);
        // }

        // function to make each movie's image and info list (modified from teacher)
        function makeOneMovieList($movieData) {
          echo "<div id='".$movieData["phpName"]."' class='movieItem'>";
            echo "<img src='".$movieData["poster"]."' title='".$movieData[title]." Poster'> class='poster'"; // get image w/title
            echo "<ul>"; // make a list for each info item
              // echo "<li>".$movieData["phpName"]."</li>";
              echo "<li><a href=".$movieData["imdbURL"]. "target='_blank'>".$movieData[title]."</a></li>"; // make title into url to imdb page
              echo "<li>Year Released: ".$movieData["year"]."</li>";
              echo "<li>Rotten Tomatoes Score: ".$movieData["rating"]."</li>";
              echo "<li>Movie Genre: ".$movieData["genre"]."</li>";
            echo "</ul><br />";
          echo "</div> <!-- ends #".$movieData["phpName"]."-->";
        }

        makeOneMovieList($movieA);
        makeOneMovieList($movieB);
        makeOneMovieList($movieC);
        makeOneMovieList($movieD);
        makeOneMovieList($movieE);
        // createMovieLists();

        // test single pull data from master movie array
        //foreach($movieList[0] as $data) {
        //  echo $data . "<br />";
        //}

        // test mass pull data from master movie array with info
        // foreach($movieList as $movieListArrayValues) {
        //  foreach($movieListArrayValues as $info => $data){
        //    echo "{$info}: {$data}<br/>";
        //  }
        //  echo "<br />";
        // }

        ?>

      </div> <!-- ends #movieContainer -->

    </div> <!-- ends .pageWrap -->
  </body>
</html>
