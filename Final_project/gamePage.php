<?php 
  session_start();
  date_default_timezone_set('US/Eastern');
  include 'dbh.php';
  include 'comments.php';
?>
<!DOCTYPE html>
 <html lang="en-us">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <title>LiterallyGames Search</title>
   <link rel="stylesheet" type= "text/css" href="gamepage.css">
   <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <script type="text/javascript" src="main.js"></script>
  </head>

  <body id="main">

    <header>
      <nav>
        <ul class = "navs">
          <li id = "teamname" onclick = "Prankfunction()">LiterallyGames</li>
          <li><a href="index.html">Home</a></li>
          <li><a id = "about" onmouseover = "prankfunction()" onmouseout = "prankrestored()" href="">About Us</a><img id = "cyan" src = "cyan.png"></img></li>
          <a href="sign_in.html"><img id = "navimg" src = "unknow.jpg"></a>
        </ul>
      </nav>
    </header>

    <?php
      
  /* Create a new database connection object, passing in the host, username,
        password, and database to use. The "@" suppresses errors. */
      @ $db = new mysqli('localhost', 'root', '123root', 'Literally Games');
        
      $dbOk = true; 
    ?>
    <?php
      if ($dbOk) {
        $t = $_SESSION['title'];
        $results = $db->query("SELECT * FROM `TABLE 1` WHERE `Title` = '$t'");
        $row = $results->fetch_assoc();

        ?>
        <section id=game>
          <div class="container">
            <div class="row">
              <div class="row slog">
                <h1><?php echo $row['Title']; ?></h1>
              </div>
              <div class="title">
                <p><img class="gameImage" src="<?php echo $row['Picture'];?>"></p>
              </div>
              <div class="prices">
                <h2> Compare All Prices </h2>
                <ul>
                  <li><a class="store" href="https://store.steampowered.com/app/582160/Assassins_Creed_Origins/">Steam: $11.99</a></li>
                  <li><a class="store" href="https://store.ubi.com/us/game/?lang=en_US&pid=592450934e0165f46c8b4568&dwvar_592450934e0165f46c8b4568_Platform=pcdl&edition=Standard%20Edition&source=detail">UPlay: $12.00</a></li>
                  <li><a class="store" href="https://www.origin.com/usa/en-us/store/assassins-creed/assassins-creed-origins">Origin: $60.00</a></li>
                </ul>
                <h2> Platforms </h2>
                <?php
                  if ($row['PC'] == 1) {?>
                    <p>PC</p>
                  <?php
                  }
                  if ($row['Xbox One'] == 1) {?>
                    <p>Xbox One</p>
                  <?php
                  }
                  if ($row['Playstation 4'] == 1) {?>
                    <p>Playstation 4</p>
                  <?php
                  }
                  if ($row['Nintendo Switch'] == 1) {?>
                    <p>Nintendo Switch</p>
                  <?php
                  }
                ?>
                <h2> Genres </h2>
                <?php
                  if ($row['Action'] == 1) {?>
                    <p>Action</p>
                  <?php
                  }
                  if ($row['Adventure'] == 1) {?>
                    <p>Adventure</p>
                  <?php
                  }
                  if ($row['Battle Royale'] == 1) {?>
                    <p>Battle Royale</p>
                  <?php
                  }
                  if ($row['Fighting'] == 1) {?>
                    <p>Fighting</p>
                  <?php
                  }
                  if ($row['Shooter'] == 1) {?>
                    <p>Shooter</p>
                  <?php
                  }
                  if ($row['Racing'] == 1) {?>
                    <p>Racing</p>
                  <?php
                  }
                  if ($row['Real-Time Strategy'] == 1) {?>
                    <p>Real-Time Strategy</p>
                  <?php
                  }
                  if ($row['Role-Playing'] == 1) {?>
                    <p>Role-Playing</p>
                  <?php
                  }
                  if ($row['Simulation'] == 1) {?>
                    <p>Simulation</p>
                  <?php
                  }
                  if ($row['Sports'] == 1) {?>
                    <p>Sports</p>
                  <?php
                  }
                ?>
                <h2> Modes </h2>
                <?php
                  if ($row['Singleplayer'] == 1) {?>
                    <p>Singleplayer</p>
                  <?php
                  }
                  if ($row['Multiplayer'] == 1) {?>
                    <p>Multiplayer</p>
                  <?php
                  }
                  if ($row['Online'] == 1) {?>
                    <p>Online</p>
                  <?php
                  }
                  if ($row['Local'] == 1) {?>
                    <p>local</p>
                  <?php
                  }
                ?>

              </div>

              <div class="rating">
                <div class="col-lg-4 rating">
                  <h3> ESRB Rating: </h3>
                  <?php
                  if ($row['E'] == 1) {?>
                      <p>E for Everyone</p>
                    <?php
                    }
                    if ($row['E10'] == 1) {?>
                      <p>E10 for Everyone 10+</p>
                    <?php
                    }
                    if ($row['T'] == 1) {?>
                      <p>T for Teens</p>
                    <?php
                    }
                    if ($row['M'] == 1) {?>
                      <p>M for Mature</p>
                    <?php
                    }
                  ?>
                </div>
                
                <div class="col-lg-4 rating">
                  <h3> Rating: <?php echo $row['Rating'] ?> </h3>
                  <?php
                    for ($i=0; $i < floor($row['Rating']); $i++) {?>
                      <span class="fa fa-star checked" style="margin-bottom: 14.118px;"></span>
                    <?php
                    }
                    for ($i=0; $i < (10-floor($row['Rating'])); $i++) {?>
                      <span class="fa fa-star" style="margin-bottom: 14.118px;"></span>
                    <?php
                    }
                  ?>
                </div>
                <div class="col-lg-4 rating">
                  <h3> Date Released: </h3>
                  <p> <?php echo $row['Month'] . '-' . $row['Day'] . '-' . $row['Year']; ?> </p>
                </div>
                </br></br></br></br></br></br>
              </div>

              <div class="des">
                <h2> Description </h2>
                <p> <?php echo $row['Description']; ?> </p>
              <div>
            </div>
          </div>

        </section>

      <?php
      }
    ?>
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
      echo "Hades: " . $steamPrice[$steamID]["data"]["price_overview"]["final_formatted"] . " \n";

      //Need to change so that the game title can change dynamically using the database, or hardcode each page with their names
    ?>

    <?php
    echo "
    <div class='container'>
      <div class='row'>
        <form method='POST' action='".setComments($conn)."'>
          <input type='hidden' name='uid' value='Anonymous'>
          <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
          <textarea name='message'> </textarea></br>
          <button class='sub' type='submit' name='commentSubmit'>Comment</button>
        </form>
      </div>
    </div>";
    getComments($conn);
    ?>
  </body>
</html>
