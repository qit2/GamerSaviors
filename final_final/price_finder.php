<html>
  <head><!-- 
    <link rel="stylesheet" type= "text/css" href="gradebook.css"> -->
    <title>Price finder test</title>
  </head>
  <body>
    <?php
      //Initialize ID variables - with database linked up, we should be able to fetch the id from the database given the name
      //Not sure how to separate based on console yet, will think
      $gameStopID = 10141904;
      $targetID = 51328402;
      $steamID = 1145360;

      //GET requests to the GameStop web page, the Target data API, and the Steam info API.
      $gameStop = file_get_contents("http://www.gamestop.com/" . $gameStopID . ".html");
      $target = file_get_contents("https://redsky.target.com/web/pdp_location/v1/tcin/" . $targetID . "?pricing_store_id=0000&key=");
      $steam = file_get_contents("http://store.steampowered.com/api/appdetails/?appids=" . $steamID);
      
      //Scrape the price from the GameStop web page using regular expressions - selects the shortest match between the 
      //given string and the $ character, then selects the shortest match between the $ character and a </span> tag. Without the 
      //? character, the expression selects the largest match and outputs 90% of the html.
      $isMatched = preg_match('/<div class="condition-prices">(.*?)\$(.*?)<\/span>/s', $gameStop, $match);

      //Initialize GameStop price variable
      $gameStopPrice = 0;
      
      //If block to check if the connection was successful, then echoes onto page
      if ($isMatched and isset($match[2])) {

        $gameStopPrice = $match[2];
        echo "The Legend of Zelda: Breath of the Wild: $" . $gameStopPrice . '<br>';
      }
      
      //Sets Target price and echoes onto page
      $targetPrice = json_decode($target, true);
      echo "Death Stranding: $" . $targetPrice["price"]["current_retail"] . " \n";

      //Sets Steam price and echoes onto page
      $steamPrice = json_decode($steam, true);
      echo "Hades: " . $steamPrice["1145360"]["data"]["price_overview"]["final_formatted"] . " \n";

      //Need to change so that the game title can change dynamically using the database, or hardcode each page with their names
    ?>
  </body>
</html>