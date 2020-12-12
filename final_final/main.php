<?php session_start() ?>
<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>LiterallyGames Search</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <script type="text/javascript" src="main.js"></script>
</head>

<body id="main">
  <header>
    <nav>
      <ul class="navs">
        <li id="teamname" onclick="Prankfunction()">LiterallyGames</li>
        <li><a href="main.php"">Home</a></li>
        <li><a href="forum.php">Discussion Forum</a></li>
        <li><a id="about" onmouseover="prankfunction()" onmouseout="prankrestored()" href="http://www.innersloth.com/gameAmongUs.php">About Us</a><img id="cyan" src="cyan.png"></img></li>
        <div class="dropdown">
          <button class="dropbtn" id="dropbton"><img id="navimg" src="unknow.jpg"></button>
          <div class="dropdown-content">
            <a href="#"><span class="settings" id="usernamehere"><?php echo $_SESSION["username"] ?></span></a>
            <a class="settings" href="sign_out.php">Logout</a>
          </div>
        </div>

      </ul>

    </nav>

  </header>

  <section id="slogan">
    <div class="container">
      <div class="row slog">
        <h1>To game or not to game, Saviors shall help you!</h1>
      </div>
    </div>
  </section>

  <section id="search">
    <div class="container">
      <div class="row search">
        <button id="asbutton" onclick="myFunction()">Advanced Search &#9660;</button>
        <form method="post" action="main.php">
          <input class="gameSearch" name="gameSearch" placeholder="Search for a Game" type="text" />
          <input id="submit" type="submit" value="Submit">

          <div id="as">
            <div class="col-lg-6 platform">
              <h2>Platform</h2>
              <input type="checkbox" name="PC" value="pc">
              <label class="marg" for="PC"> PC </label><br>
              <input type="checkbox" name="XBOX" value="xbox">
              <label class="marg" for="XBOX"> XBOX </label><br>
              <input type="checkbox" name="XBOX360" value="xbox360">
              <label class="marg" for="XBOX360"> XBOX 360 </label><br>
              <input type="checkbox" name="XBOX1" value="xbox1">
              <label class="marg" for="XBOX1"> XBOX One </label><br>
              <input type="checkbox" name="Playstation" value="playstation">
              <label class="marg" for="Playstation"> Playstation </label><br>
              <input type="checkbox" name="Playstation2" value="playstation2">
              <label class="marg" for="Playstation2"> Playstation 2 </label><br>
              <input type="checkbox" name="Playstation3" value="playstation3">
              <label class="marg" for="Playstation3"> Playstation 3 </label><br>
              <input type="checkbox" name="Playstation4" value="playstation4">
              <label class="marg" for="Playstation4"> Playstation 4 </label><br>
              <input type="checkbox" name="Nintendo" value="nintendo">
              <label class="marg" for="Nintendo"> Nintendo Entertainment System </label><br>
              <input type="checkbox" name="Nintendo64" value="nintendo64">
              <label class="marg" for="Nintendo64"> Nintendo 64 </label><br>
              <input type="checkbox" name="GameCube" value="GameCube">
              <label class="marg" for="GameCube"> GameCube </label><br>
              <input type="checkbox" name="Wii" value="wii">
              <label class="marg" for="Wii"> Wii </label><br>
              <input type="checkbox" name="WiiU" value="wiiu">
              <label class="marg" for="WiiU"> Wii U </label><br>
              <input type="checkbox" name="Switch" value="switch">
              <label class="marg" for="Switch"> Nintendo Switch </label><br>
            </div>

            <div class="col-lg-6 genre">
              <h2>Genre</h2>
              <input type="checkbox" name="Action" value="action">
              <label class="marg" for="Action"> Action </label><br>
              <input type="checkbox" name="Adventure" value="adventure">
              <label class="marg" for="Adventure"> Adventure </label><br>
              <input type="checkbox" name="Battleroyale" value="battleroyale">
              <label class="marg" for="Battleroyale"> Battle Royale </label><br>
              <input type="checkbox" name="Fighting" value="fighting">
              <label class="marg" for="Fighting"> Fighting </label><br>
              <input type="checkbox" name="Shooter" value="shooter">
              <label class="marg" for="Shooter"> Shooter </label><br>
              <input type="checkbox" name="Racing" value="racing">
              <label class="marg" for="Racing"> Racing </label><br>
              <input type="checkbox" name="RTS" value="rts">
              <label class="marg" for="RTS"> Real-Time Strategy </label><br>
              <input type="checkbox" name="RolePlaying" value="roleplaying">
              <label class="marg" for="RolePlaying"> Role-Playing </label><br>
              <input type="checkbox" name="Simulation" value="simulation">
              <label class="marg" for="Simulation"> Simulation </label><br>
              <input type="checkbox" name="Sports" value="sports">
              <label class="marg" for="Sports"> Sports </label><br>
            </div>

            <div class="col-lg-12 mode">
              <h2 id="mode">Mode</h2>
              <div class="col-lg-3">
                <input type="checkbox" name="Singleplayer" value="singleplayer">
                <label class="marg" for="Singleplayer"> Singleplayer </label><br>
              </div>
              <div class="col-lg-3">
                <input type="checkbox" name="Multi" value="multi">
                <label class="marg" for="Multi"> Multiplayer </label><br>
              </div>
              <div class="col-lg-3">
                <input type="checkbox" name="Online" value="online">
                <label class="marg" for="Online"> Online </label><br>
              </div>
              <div class="col-lg-3">
                <input type="checkbox" name="Local" value="local">
                <label class="marg" for="Local"> Local </label><br>
              </div>
            </div>

            <div class="col-lg-4 rating">
              <h2>Rating</h2>
              <input type="checkbox" name="Everyone" value="everyone">
              <label class="marg" for="Everyone"> E = Everyone </label><br>
              <input type="checkbox" name="Everyone10" value="everyone10">
              <label class="marg" for="Everyone10"> E10 = Everyone 10 and older </label><br>
              <input type="checkbox" name="Teen" value="teen">
              <label class="marg" for="Teen"> T = Teen </label><br>
              <input type="checkbox" name="Mature" value="mature">
              <label class="marg" for="Mature"> M = Mature </label><br>
            </div>

            <div class="col-lg-4 price">
              <h2>Price</h2>
              <label class="fix" for="quantity">Amount:</label>
              <input type="text" placeholder="0 - 100" id="quantity" name="quantity"><br>
              <input type="checkbox" name="Price" value="price">
              <label class="marg" for="Price"> Any Amount </label><br>
            </div>

            <div class="col-lg-4 date">
              <h2>Release Date</h2>
              <label class="fix" for="yearmin">Enter a year after 2000:</label>
              <input type="text" class="dates" id="yearmin" name="yearmin" placeholder="YYYY"><br><br>
              <label class="fix" for="yearmax">Enter a year before 2021:</label>
              <input type="text" class="dates" id="yearmax" name="yearmax" placeholder="YYYY"><br><br>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="dropdown" id="dropdown">
          <button class="dropbtn">Dropdown</button>
          <div class="dropdown-content">
            <a href="#" onclick="myFunction1();">Rating Ascending</a>
            <a href="#" onclick="myFunction2();">Rating Descending</a>
            <a href="#" onclick="myFunction3();">Price Ascending</a>
            <a href="#" onclick="myFunction4();">Price Descending</a>
            <a href="#" onclick="myFunction5();">Title Ascending</a>
            <a href="#" onclick="myFunction6();">Title Descending</a>
          </div>
        </div>
      </div>
    </div>
  </section>





  <section id="games">
    <?php

    /* Create a new database connection object, passing in the host, username,
     password, and database to use. The "@" suppresses errors. */
    @$db = new mysqli('localhost', 'root', 'qtt0210', 'final_project');

    $dbOk = true;
    ?>
    <?php
    if ($dbOk) {

      //This section is all the games ordered by rating
    ?>
      <section id="rating">
        <?php
        $array = [];
        $query = "";
        if (isset($_POST['PC'])) {
          array_push($array, "`PC` LIKE 1");
        }
        if (isset($_POST['XBOX1'])) {
          array_push($array, "`Xbox One` LIKE 1");
        }
        if (isset($_POST['Playstation4'])) {
          array_push($array, "`Playstation 4` LIKE 1");
        }
        if (isset($_POST['Switch'])) {
          array_push($array, "`Nintendo Switch` LIKE 1");
        }
        if (isset($_POST['Action'])) {
          array_push($array, "`Action` LIKE 1");
        }
        if (isset($_POST['Adventure'])) {
          array_push($array, "`Adventure` LIKE 1");
        }
        if (isset($_POST['Battleroyale'])) {
          array_push($array, "`Battle Royale` LIKE 1");
        }
        if (isset($_POST['Fighting'])) {
          array_push($array, "`Fighting` LIKE 1");
        }
        if (isset($_POST['Shooter'])) {
          array_push($array, "`Shooter` LIKE 1");
        }
        if (isset($_POST['Racing'])) {
          array_push($array, "`Racing` LIKE 1");
        }
        if (isset($_POST['RTS'])) {
          array_push($array, "`Real-Time Strategy` LIKE 1");
        }
        if (isset($_POST['RolePlaying'])) {
          array_push($array, "`Role-Playing` LIKE 1");
        }
        if (isset($_POST['Simulation'])) {
          array_push($array, "`Simulation` LIKE 1");
        }
        if (isset($_POST['Sports'])) {
          array_push($array, "`Sports` LIKE 1");
        }
        if (isset($_POST['Singleplayer'])) {
          array_push($array, "`Singleplayer` LIKE 1");
        }
        if (isset($_POST['Multiplayer'])) {
          array_push($array, "`Multiplayer` LIKE 1");
        }
        if (isset($_POST['Online'])) {
          array_push($array, "`Online` LIKE 1");
        }
        if (isset($_POST['Local'])) {
          array_push($array, "`Local` LIKE 1");
        }
        if (isset($_POST['Everyone'])) {
          array_push($array, "`E` LIKE 1");
        }
        if (isset($_POST['Everyone10'])) {
          array_push($array, "`E10` LIKE 1");
        }
        if (isset($_POST['Teen'])) {
          array_push($array, "`T` LIKE 1");
        }
        if (isset($_POST['Mature'])) {
          array_push($array, "`M` LIKE 1");
        }
        if (isset($_POST['quantity']) && $_POST['quantity'] != 0 && $_POST['quantity'] <= 100 && $_POST['quantity'] >= 0) {
          array_push($array, "`Price` BETWEEN " . ($_POST['quantity'] - 5) . " AND " . ($_POST['quantity'] + 5));
        }
        if (isset($_POST['quantity']) && ($_POST['quantity'] > 100 || $_POST['quantity'] < 0)) {
          echo '<script>alert("INVALID AMOUNT ENTERED")</script>';
          array_push($array, "`Title` Like '%%'");
        }
        if (isset($_POST['Price'])) {
          array_push($array, "`Price` LIKE '%%'");
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && ($_POST['yearmin'] >= 2000) && ($_POST['yearmax'] <= 2020)) {
          array_push($array, "`Year` BETWEEN " . $_POST['yearmin'] . " AND " . $_POST['yearmax']);
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && (($_POST['yearmin'] < 2000) || ($_POST['yearmax'] > 2020))) {
          echo '<script>alert("INVALID DATE ENTERED")</script>';
          array_push($array, "`Title` Like '%%'");
        }

        if (isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price']) && isset($_POST['quantity']) && $_POST['quantity'] == 0 && isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] == '') && ($_POST['yearmax'] == '')) {
          $search = $_POST['gameSearch'];
          array_push($array, "`Title` LIKE '%$search%'");
        }
        if (!isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price'])) {
          array_push($array, "`Title` Like '%%'");
        }
        ?>

        <?php
        if (count($array) == 1) {
          $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[0] . " ORDER BY `Rating`";
        } else {
          for ($j = 0; $j < count($array); $j++) {
            if ($j == 0) {
              $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[$j];
            } else if ($j == (count($array) - 1)) {
              $query .= " AND " . $array[$j] . " ORDER BY `Rating`";
            } else {
              $query .= " And " . $array[$j];
            }
          }
        }

        /*
      $results = $db->query("SELECT * FROM `TABLE 1` WHERE `id` = 1");
      $row = $results->fetch_assoc();
      echo ($row['Title']);
      */

        ?>
        <script>
          function redirect() {
            window.location.replace("gamePage.php");
            return false;
          }
        </script>

        <?php

        function updates1($id2, $numRecords)
        {

          // Create connection
          $conn = new mysqli('localhost', 'root', 'ITWSnewpass77', 'Literally Games');
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "UPDATE `TABLE 1` SET newpage=1 WHERE id=$id2";
          if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
          }

          for ($d = 1; $d < $numRecords; $d++) {
            if ($d != $id2) {
              $sql = "UPDATE `TABLE 1` SET newpage=0 WHERE id=$d";
            }
            if ($conn->query($sql) != TRUE) {
              echo "Error updating record: " . $conn->error;
            }
          }

          $conn->close();
        }

        $result = $db->query($query);
        $numRecords = $result->num_rows;

        for ($i = 0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc();

        ?>
          <div class="container">
            <?php
            if ($i % 2 == 0) { ?>
              <div class="row games">
              <?php
            } else { ?>
                <div class="row games1">
                <?php
              }
                ?>

                <div class="col-lg-2 image">
                  <a href="gamePage.php" onclick="<?php $_SESSION['title'] = $_POST['title']; ?>"><img src="<?php echo htmlspecialchars($record['Picture']); ?>" alt="<?php echo htmlspecialchars($record['Title']); ?>" onmouseover="getTitle(this)" height="250" width="180" /></a>

                  <?php
                  if (array_key_exists($i, $_POST)) {
                    updates1(htmlspecialchars($record['id']), $numRecords);
                  }
                  ?>
                </div>
                <div class="col-lg-2">
                  <h3>Platform(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['PC']) == 1) {
                      echo "PC";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Xbox One']) == 1) {
                      echo "Xbox One";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Playstation 4']) == 1) {
                      echo "Playstation 4";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Nintendo Switch']) == 1) {
                      echo "Nintendo Switch";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Genre(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Action']) == 1) {
                      echo "Action";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Adventure']) == 1) {
                      echo "Adventure";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Battle Royale']) == 1) {
                      echo "Battle Royale";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Fighting']) == 1) {
                      echo "Fighting";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Shooter']) == 1) {
                      echo "Shooter";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Racing']) == 1) {
                      echo "Racing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Real-Time Strategy']) == 1) {
                      echo "Real-Time Strategy";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Role-Playing']) == 1) {
                      echo "Role-Playing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Simulation']) == 1) {
                      echo "Simulation";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Sports']) == 1) {
                      echo "Sports";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Rating:</h3>
                  <p><?php echo htmlspecialchars($record['Rating']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Price:</h3>
                  <p><?php echo htmlspecialchars($record['Price']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Description:</h3>
                  <p style="height: 200px; overflow: auto;"><?php echo htmlspecialchars($record['Description']); ?></p>
                </div>
                </div>
              </div>

            <?php
          }
            ?>
      </section>


      <!--This section is all the games ordered by reverse rating-->
      <section id="Rrating">
        <?php
        $array = [];
        $query = "";
        if (isset($_POST['PC'])) {
          array_push($array, "`PC` LIKE 1");
        }
        if (isset($_POST['XBOX1'])) {
          array_push($array, "`Xbox One` LIKE 1");
        }
        if (isset($_POST['Playstation4'])) {
          array_push($array, "`Playstation 4` LIKE 1");
        }
        if (isset($_POST['Switch'])) {
          array_push($array, "`Nintendo Switch` LIKE 1");
        }
        if (isset($_POST['Action'])) {
          array_push($array, "`Action` LIKE 1");
        }
        if (isset($_POST['Adventure'])) {
          array_push($array, "`Adventure` LIKE 1");
        }
        if (isset($_POST['Battleroyale'])) {
          array_push($array, "`Battle Royale` LIKE 1");
        }
        if (isset($_POST['Fighting'])) {
          array_push($array, "`Fighting` LIKE 1");
        }
        if (isset($_POST['Shooter'])) {
          array_push($array, "`Shooter` LIKE 1");
        }
        if (isset($_POST['Racing'])) {
          array_push($array, "`Racing` LIKE 1");
        }
        if (isset($_POST['RTS'])) {
          array_push($array, "`Real-Time Strategy` LIKE 1");
        }
        if (isset($_POST['RolePlaying'])) {
          array_push($array, "`Role-Playing` LIKE 1");
        }
        if (isset($_POST['Simulation'])) {
          array_push($array, "`Simulation` LIKE 1");
        }
        if (isset($_POST['Sports'])) {
          array_push($array, "`Sports` LIKE 1");
        }
        if (isset($_POST['Singleplayer'])) {
          array_push($array, "`Singleplayer` LIKE 1");
        }
        if (isset($_POST['Multiplayer'])) {
          array_push($array, "`Multiplayer` LIKE 1");
        }
        if (isset($_POST['Online'])) {
          array_push($array, "`Online` LIKE 1");
        }
        if (isset($_POST['Local'])) {
          array_push($array, "`Local` LIKE 1");
        }
        if (isset($_POST['Everyone'])) {
          array_push($array, "`E` LIKE 1");
        }
        if (isset($_POST['Everyone10'])) {
          array_push($array, "`E10` LIKE 1");
        }
        if (isset($_POST['Teen'])) {
          array_push($array, "`T` LIKE 1");
        }
        if (isset($_POST['Mature'])) {
          array_push($array, "`M` LIKE 1");
        }
        if (isset($_POST['quantity']) && $_POST['quantity'] != 0 && $_POST['quantity'] <= 100 && $_POST['quantity'] >= 0) {
          array_push($array, "`Price` BETWEEN " . ($_POST['quantity'] - 5) . " AND " . ($_POST['quantity'] + 5));
        }
        if (isset($_POST['quantity']) && ($_POST['quantity'] > 100 || $_POST['quantity'] < 0)) {
          array_push($array, "`Title` Like '%%'");
        }
        if (isset($_POST['Price'])) {
          array_push($array, "`Price` LIKE '%%'");
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && ($_POST['yearmin'] >= 2000) && ($_POST['yearmax'] <= 2020)) {
          array_push($array, "`Year` BETWEEN " . $_POST['yearmin'] . " AND " . $_POST['yearmax']);
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && (($_POST['yearmin'] < 2000) || ($_POST['yearmax'] > 2020))) {
          array_push($array, "`Title` Like '%%'");
        }

        if (isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price']) && isset($_POST['quantity']) && $_POST['quantity'] == 0 && isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] == '') && ($_POST['yearmax'] == '')) {
          $search = $_POST['gameSearch'];
          array_push($array, "`Title` LIKE '%$search%'");
        }
        if (!isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price'])) {
          array_push($array, "`Title` Like '%%'");
        }
        ?>
        <?php
        if (count($array) == 1) {
          $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[0] . " ORDER BY `Rating` desc";
        } else {
          for ($j = 0; $j < count($array); $j++) {
            if ($j == 0) {
              $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[$j];
            } else if ($j == (count($array) - 1)) {
              $query .= " AND " . $array[$j] . " ORDER BY `Rating` desc";
            } else {
              $query .= " And " . $array[$j];
            }
          }
        }
        ?>

        <?php

        $result = $db->query($query);
        $numRecords = $result->num_rows;

        for ($i = 0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc(); ?>

          <div class="container">
            <?php
            if ($i % 2 == 0) { ?>
              <div class="row games">
              <?php
            } else { ?>
                <div class="row games1">
                <?php
              }
                ?>

                <div class="col-lg-2 image">
                  <a href="gamePage.php" onclick="<?php $_SESSION['title'] = $_POST['title']; ?>"><img src="<?php echo htmlspecialchars($record['Picture']); ?>" alt="<?php echo htmlspecialchars($record['Title']); ?>" onmouseover="getTitle(this)" height="250" width="180" /></a>
                </div>
                <div class="col-lg-2">
                  <h3>Platform(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['PC']) == 1) {
                      echo "PC";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Xbox One']) == 1) {
                      echo "Xbox One";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Playstation 4']) == 1) {
                      echo "Playstation 4";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Nintendo Switch']) == 1) {
                      echo "Nintendo Switch";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Genre(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Action']) == 1) {
                      echo "Action";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Adventure']) == 1) {
                      echo "Adventure";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Battle Royale']) == 1) {
                      echo "Battle Royale";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Fighting']) == 1) {
                      echo "Fighting";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Shooter']) == 1) {
                      echo "Shooter";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Racing']) == 1) {
                      echo "Racing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Real-Time Strategy']) == 1) {
                      echo "Real-Time Strategy";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Role-Playing']) == 1) {
                      echo "Role-Playing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Simulation']) == 1) {
                      echo "Simulation";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Sports']) == 1) {
                      echo "Sports";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Rating:</h3>
                  <p><?php echo htmlspecialchars($record['Rating']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Price:</h3>
                  <p><?php echo htmlspecialchars($record['Price']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Description:</h3>
                  <p style="height: 200px; overflow: auto;"><?php echo htmlspecialchars($record['Description']); ?></p>
                </div>
                </div>
              </div>

            <?php
          }
            ?>
      </section>

      <!--This section is all the games ordered by price-->
      <section id="price">
        <?php
        $array = [];
        $query = "";
        if (isset($_POST['PC'])) {
          array_push($array, "`PC` LIKE 1");
        }
        if (isset($_POST['XBOX1'])) {
          array_push($array, "`Xbox One` LIKE 1");
        }
        if (isset($_POST['Playstation4'])) {
          array_push($array, "`Playstation 4` LIKE 1");
        }
        if (isset($_POST['Switch'])) {
          array_push($array, "`Nintendo Switch` LIKE 1");
        }
        if (isset($_POST['Action'])) {
          array_push($array, "`Action` LIKE 1");
        }
        if (isset($_POST['Adventure'])) {
          array_push($array, "`Adventure` LIKE 1");
        }
        if (isset($_POST['Battleroyale'])) {
          array_push($array, "`Battle Royale` LIKE 1");
        }
        if (isset($_POST['Fighting'])) {
          array_push($array, "`Fighting` LIKE 1");
        }
        if (isset($_POST['Shooter'])) {
          array_push($array, "`Shooter` LIKE 1");
        }
        if (isset($_POST['Racing'])) {
          array_push($array, "`Racing` LIKE 1");
        }
        if (isset($_POST['RTS'])) {
          array_push($array, "`Real-Time Strategy` LIKE 1");
        }
        if (isset($_POST['RolePlaying'])) {
          array_push($array, "`Role-Playing` LIKE 1");
        }
        if (isset($_POST['Simulation'])) {
          array_push($array, "`Simulation` LIKE 1");
        }
        if (isset($_POST['Sports'])) {
          array_push($array, "`Sports` LIKE 1");
        }
        if (isset($_POST['Singleplayer'])) {
          array_push($array, "`Singleplayer` LIKE 1");
        }
        if (isset($_POST['Multiplayer'])) {
          array_push($array, "`Multiplayer` LIKE 1");
        }
        if (isset($_POST['Online'])) {
          array_push($array, "`Online` LIKE 1");
        }
        if (isset($_POST['Local'])) {
          array_push($array, "`Local` LIKE 1");
        }
        if (isset($_POST['Everyone'])) {
          array_push($array, "`E` LIKE 1");
        }
        if (isset($_POST['Everyone10'])) {
          array_push($array, "`E10` LIKE 1");
        }
        if (isset($_POST['Teen'])) {
          array_push($array, "`T` LIKE 1");
        }
        if (isset($_POST['Mature'])) {
          array_push($array, "`M` LIKE 1");
        }
        if (isset($_POST['quantity']) && $_POST['quantity'] != 0 && $_POST['quantity'] <= 100 && $_POST['quantity'] >= 0) {
          array_push($array, "`Price` BETWEEN " . ($_POST['quantity'] - 5) . " AND " . ($_POST['quantity'] + 5));
        }
        if (isset($_POST['quantity']) && ($_POST['quantity'] > 100 || $_POST['quantity'] < 0)) {
          array_push($array, "`Title` Like '%%'");
        }
        if (isset($_POST['Price'])) {
          array_push($array, "`Price` LIKE '%%'");
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && ($_POST['yearmin'] >= 2000) && ($_POST['yearmax'] <= 2020)) {
          array_push($array, "`Year` BETWEEN " . $_POST['yearmin'] . " AND " . $_POST['yearmax']);
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && (($_POST['yearmin'] < 2000) || ($_POST['yearmax'] > 2020))) {
          array_push($array, "`Title` Like '%%'");
        }

        if (isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price']) && isset($_POST['quantity']) && $_POST['quantity'] == 0 && isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] == '') && ($_POST['yearmax'] == '')) {
          $search = $_POST['gameSearch'];
          array_push($array, "`Title` LIKE '%$search%'");
        }
        if (!isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price'])) {
          array_push($array, "`Title` Like '%%'");
        }
        ?>
        <?php
        if (count($array) == 1) {
          $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[0] . " ORDER BY `Price`";
        } else {
          for ($j = 0; $j < count($array); $j++) {
            if ($j == 0) {
              $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[$j];
            } else if ($j == (count($array) - 1)) {
              $query .= " AND " . $array[$j] . " ORDER BY `Price`";
            } else {
              $query .= " And " . $array[$j];
            }
          }
        }
        ?>

        <?php

        $result = $db->query($query);
        $numRecords = $result->num_rows;

        for ($i = 0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc(); ?>

          <div class="container">
            <?php
            if ($i % 2 == 0) { ?>
              <div class="row games">
              <?php
            } else { ?>
                <div class="row games1">
                <?php
              }
                ?>

                <div class="col-lg-2 image">
                  <a href="gamePage.php" onclick="<?php $_SESSION['title'] = $_POST['title']; ?>"><img src="<?php echo htmlspecialchars($record['Picture']); ?>" alt="<?php echo htmlspecialchars($record['Title']); ?>" onmouseover="getTitle(this)" height="250" width="180" /></a>
                </div>
                <div class="col-lg-2">
                  <h3>Platform(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['PC']) == 1) {
                      echo "PC";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Xbox One']) == 1) {
                      echo "Xbox One";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Playstation 4']) == 1) {
                      echo "Playstation 4";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Nintendo Switch']) == 1) {
                      echo "Nintendo Switch";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Genre(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Action']) == 1) {
                      echo "Action";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Adventure']) == 1) {
                      echo "Adventure";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Battle Royale']) == 1) {
                      echo "Battle Royale";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Fighting']) == 1) {
                      echo "Fighting";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Shooter']) == 1) {
                      echo "Shooter";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Racing']) == 1) {
                      echo "Racing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Real-Time Strategy']) == 1) {
                      echo "Real-Time Strategy";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Role-Playing']) == 1) {
                      echo "Role-Playing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Simulation']) == 1) {
                      echo "Simulation";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Sports']) == 1) {
                      echo "Sports";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Rating:</h3>
                  <p><?php echo htmlspecialchars($record['Rating']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Price:</h3>
                  <p><?php echo htmlspecialchars($record['Price']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Description:</h3>
                  <p style="height: 200px; overflow: auto;"><?php echo htmlspecialchars($record['Description']); ?></p>
                </div>
                </div>
              </div>

            <?php
          }
            ?>
      </section>

      <!--This section is all the games ordered by reverse price-->
      <section id="Rprice">
        <?php
        $array = [];
        $query = "";
        if (isset($_POST['PC'])) {
          array_push($array, "`PC` LIKE 1");
        }
        if (isset($_POST['XBOX1'])) {
          array_push($array, "`Xbox One` LIKE 1");
        }
        if (isset($_POST['Playstation4'])) {
          array_push($array, "`Playstation 4` LIKE 1");
        }
        if (isset($_POST['Switch'])) {
          array_push($array, "`Nintendo Switch` LIKE 1");
        }
        if (isset($_POST['Action'])) {
          array_push($array, "`Action` LIKE 1");
        }
        if (isset($_POST['Adventure'])) {
          array_push($array, "`Adventure` LIKE 1");
        }
        if (isset($_POST['Battleroyale'])) {
          array_push($array, "`Battle Royale` LIKE 1");
        }
        if (isset($_POST['Fighting'])) {
          array_push($array, "`Fighting` LIKE 1");
        }
        if (isset($_POST['Shooter'])) {
          array_push($array, "`Shooter` LIKE 1");
        }
        if (isset($_POST['Racing'])) {
          array_push($array, "`Racing` LIKE 1");
        }
        if (isset($_POST['RTS'])) {
          array_push($array, "`Real-Time Strategy` LIKE 1");
        }
        if (isset($_POST['RolePlaying'])) {
          array_push($array, "`Role-Playing` LIKE 1");
        }
        if (isset($_POST['Simulation'])) {
          array_push($array, "`Simulation` LIKE 1");
        }
        if (isset($_POST['Sports'])) {
          array_push($array, "`Sports` LIKE 1");
        }
        if (isset($_POST['Singleplayer'])) {
          array_push($array, "`Singleplayer` LIKE 1");
        }
        if (isset($_POST['Multiplayer'])) {
          array_push($array, "`Multiplayer` LIKE 1");
        }
        if (isset($_POST['Online'])) {
          array_push($array, "`Online` LIKE 1");
        }
        if (isset($_POST['Local'])) {
          array_push($array, "`Local` LIKE 1");
        }
        if (isset($_POST['Everyone'])) {
          array_push($array, "`E` LIKE 1");
        }
        if (isset($_POST['Everyone10'])) {
          array_push($array, "`E10` LIKE 1");
        }
        if (isset($_POST['Teen'])) {
          array_push($array, "`T` LIKE 1");
        }
        if (isset($_POST['Mature'])) {
          array_push($array, "`M` LIKE 1");
        }
        if (isset($_POST['quantity']) && $_POST['quantity'] != 0 && $_POST['quantity'] <= 100 && $_POST['quantity'] >= 0) {
          array_push($array, "`Price` BETWEEN " . ($_POST['quantity'] - 5) . " AND " . ($_POST['quantity'] + 5));
        }
        if (isset($_POST['quantity']) && ($_POST['quantity'] > 100 || $_POST['quantity'] < 0)) {
          array_push($array, "`Title` Like '%%'");
        }
        if (isset($_POST['Price'])) {
          array_push($array, "`Price` LIKE '%%'");
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && ($_POST['yearmin'] >= 2000) && ($_POST['yearmax'] <= 2020)) {
          array_push($array, "`Year` BETWEEN " . $_POST['yearmin'] . " AND " . $_POST['yearmax']);
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && (($_POST['yearmin'] < 2000) || ($_POST['yearmax'] > 2020))) {
          array_push($array, "`Title` Like '%%'");
        }

        if (isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price']) && isset($_POST['quantity']) && $_POST['quantity'] == 0 && isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] == '') && ($_POST['yearmax'] == '')) {
          $search = $_POST['gameSearch'];
          array_push($array, "`Title` LIKE '%$search%'");
        }
        if (!isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price'])) {
          array_push($array, "`Title` Like '%%'");
        }
        ?>
        <?php
        if (count($array) == 1) {
          $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[0] . " ORDER BY `Price` desc";
        } else {
          for ($j = 0; $j < count($array); $j++) {
            if ($j == 0) {
              $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[$j];
            } else if ($j == (count($array) - 1)) {
              $query .= " AND " . $array[$j] . " ORDER BY `Price` desc";
            } else {
              $query .= " And " . $array[$j];
            }
          }
        }
        ?>
        <?php

        $result = $db->query($query);
        $numRecords = $result->num_rows;

        for ($i = 0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc(); ?>

          <div class="container">
            <?php
            if ($i % 2 == 0) { ?>
              <div class="row games">
              <?php
            } else { ?>
                <div class="row games1">
                <?php
              }
                ?>

                <div class="col-lg-2 image">
                  <a href="gamePage.php" onclick="<?php $_SESSION['title'] = $_POST['title']; ?>"><img src="<?php echo htmlspecialchars($record['Picture']); ?>" alt="<?php echo htmlspecialchars($record['Title']); ?>" onmouseover="getTitle(this)" height="250" width="180" /></a>
                </div>
                <div class="col-lg-2">
                  <h3>Platform(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['PC']) == 1) {
                      echo "PC";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Xbox One']) == 1) {
                      echo "Xbox One";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Playstation 4']) == 1) {
                      echo "Playstation 4";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Nintendo Switch']) == 1) {
                      echo "Nintendo Switch";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Genre(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Action']) == 1) {
                      echo "Action";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Adventure']) == 1) {
                      echo "Adventure";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Battle Royale']) == 1) {
                      echo "Battle Royale";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Fighting']) == 1) {
                      echo "Fighting";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Shooter']) == 1) {
                      echo "Shooter";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Racing']) == 1) {
                      echo "Racing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Real-Time Strategy']) == 1) {
                      echo "Real-Time Strategy";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Role-Playing']) == 1) {
                      echo "Role-Playing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Simulation']) == 1) {
                      echo "Simulation";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Sports']) == 1) {
                      echo "Sports";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Rating:</h3>
                  <p><?php echo htmlspecialchars($record['Rating']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Price:</h3>
                  <p><?php echo htmlspecialchars($record['Price']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Description:</h3>
                  <p style="height: 200px; overflow: auto;"><?php echo htmlspecialchars($record['Description']); ?></p>
                </div>
                </div>
              </div>

            <?php
          }
            ?>
      </section>

      <!--This section is all the games ordered by title name-->
      <section id="alpha">
        <?php
        $array = [];
        $query = "";
        if (isset($_POST['PC'])) {
          array_push($array, "`PC` LIKE 1");
        }
        if (isset($_POST['XBOX1'])) {
          array_push($array, "`Xbox One` LIKE 1");
        }
        if (isset($_POST['Playstation4'])) {
          array_push($array, "`Playstation 4` LIKE 1");
        }
        if (isset($_POST['Switch'])) {
          array_push($array, "`Nintendo Switch` LIKE 1");
        }
        if (isset($_POST['Action'])) {
          array_push($array, "`Action` LIKE 1");
        }
        if (isset($_POST['Adventure'])) {
          array_push($array, "`Adventure` LIKE 1");
        }
        if (isset($_POST['Battleroyale'])) {
          array_push($array, "`Battle Royale` LIKE 1");
        }
        if (isset($_POST['Fighting'])) {
          array_push($array, "`Fighting` LIKE 1");
        }
        if (isset($_POST['Shooter'])) {
          array_push($array, "`Shooter` LIKE 1");
        }
        if (isset($_POST['Racing'])) {
          array_push($array, "`Racing` LIKE 1");
        }
        if (isset($_POST['RTS'])) {
          array_push($array, "`Real-Time Strategy` LIKE 1");
        }
        if (isset($_POST['RolePlaying'])) {
          array_push($array, "`Role-Playing` LIKE 1");
        }
        if (isset($_POST['Simulation'])) {
          array_push($array, "`Simulation` LIKE 1");
        }
        if (isset($_POST['Sports'])) {
          array_push($array, "`Sports` LIKE 1");
        }
        if (isset($_POST['Singleplayer'])) {
          array_push($array, "`Singleplayer` LIKE 1");
        }
        if (isset($_POST['Multiplayer'])) {
          array_push($array, "`Multiplayer` LIKE 1");
        }
        if (isset($_POST['Online'])) {
          array_push($array, "`Online` LIKE 1");
        }
        if (isset($_POST['Local'])) {
          array_push($array, "`Local` LIKE 1");
        }
        if (isset($_POST['Everyone'])) {
          array_push($array, "`E` LIKE 1");
        }
        if (isset($_POST['Everyone10'])) {
          array_push($array, "`E10` LIKE 1");
        }
        if (isset($_POST['Teen'])) {
          array_push($array, "`T` LIKE 1");
        }
        if (isset($_POST['Mature'])) {
          array_push($array, "`M` LIKE 1");
        }
        if (isset($_POST['quantity']) && $_POST['quantity'] != 0 && $_POST['quantity'] <= 100 && $_POST['quantity'] >= 0) {
          array_push($array, "`Price` BETWEEN " . ($_POST['quantity'] - 5) . " AND " . ($_POST['quantity'] + 5));
        }
        if (isset($_POST['quantity']) && ($_POST['quantity'] > 100 || $_POST['quantity'] < 0)) {
          array_push($array, "`Title` Like '%%'");
        }
        if (isset($_POST['Price'])) {
          array_push($array, "`Price` LIKE '%%'");
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && ($_POST['yearmin'] >= 2000) && ($_POST['yearmax'] <= 2020)) {
          array_push($array, "`Year` BETWEEN " . $_POST['yearmin'] . " AND " . $_POST['yearmax']);
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && (($_POST['yearmin'] < 2000) || ($_POST['yearmax'] > 2020))) {
          array_push($array, "`Title` Like '%%'");
        }

        if (isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price']) && isset($_POST['quantity']) && $_POST['quantity'] == 0 && isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] == '') && ($_POST['yearmax'] == '')) {
          $search = $_POST['gameSearch'];
          array_push($array, "`Title` LIKE '%$search%'");
        }
        if (!isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price'])) {
          array_push($array, "`Title` Like '%%'");
        }
        ?>
        <?php
        if (count($array) == 1) {
          $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[0] . " ORDER BY `Title`";
        } else {
          for ($j = 0; $j < count($array); $j++) {
            if ($j == 0) {
              $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[$j];
            } else if ($j == (count($array) - 1)) {
              $query .= " AND " . $array[$j] . " ORDER BY `Title`";
            } else {
              $query .= " And " . $array[$j];
            }
          }
        }
        ?>

        <?php

        $result = $db->query($query);
        $numRecords = $result->num_rows;

        for ($i = 0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc(); ?>

          <div class="container">
            <?php
            if ($i % 2 == 0) { ?>
              <div class="row games">
              <?php
            } else { ?>
                <div class="row games1">
                <?php
              }
                ?>

                <div class="col-lg-2 image">
                  <a href="gamePage.php" onclick="<?php $_SESSION['title'] = $_POST['title']; ?>"><img src="<?php echo htmlspecialchars($record['Picture']); ?>" alt="<?php echo htmlspecialchars($record['Title']); ?>" onmouseover="getTitle(this)" height="250" width="180" /></a>
                </div>
                <div class="col-lg-2">
                  <h3>Platform(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['PC']) == 1) {
                      echo "PC";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Xbox One']) == 1) {
                      echo "Xbox One";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Playstation 4']) == 1) {
                      echo "Playstation 4";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Nintendo Switch']) == 1) {
                      echo "Nintendo Switch";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Genre(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Action']) == 1) {
                      echo "Action";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Adventure']) == 1) {
                      echo "Adventure";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Battle Royale']) == 1) {
                      echo "Battle Royale";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Fighting']) == 1) {
                      echo "Fighting";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Shooter']) == 1) {
                      echo "Shooter";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Racing']) == 1) {
                      echo "Racing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Real-Time Strategy']) == 1) {
                      echo "Real-Time Strategy";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Role-Playing']) == 1) {
                      echo "Role-Playing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Simulation']) == 1) {
                      echo "Simulation";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Sports']) == 1) {
                      echo "Sports";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Rating:</h3>
                  <p><?php echo htmlspecialchars($record['Rating']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Price:</h3>
                  <p><?php echo htmlspecialchars($record['Price']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Description:</h3>
                  <p style="height: 200px; overflow: auto;"><?php echo htmlspecialchars($record['Description']); ?></p>
                </div>
                </div>
              </div>

            <?php
          }
            ?>
      </section>

      <!--This section is all the games ordered by reverse title name-->
      <section id="Ralpha">
        <?php
        $array = [];
        $query = "";
        if (isset($_POST['PC'])) {
          array_push($array, "`PC` LIKE 1");
        }
        if (isset($_POST['XBOX1'])) {
          array_push($array, "`Xbox One` LIKE 1");
        }
        if (isset($_POST['Playstation4'])) {
          array_push($array, "`Playstation 4` LIKE 1");
        }
        if (isset($_POST['Switch'])) {
          array_push($array, "`Nintendo Switch` LIKE 1");
        }
        if (isset($_POST['Action'])) {
          array_push($array, "`Action` LIKE 1");
        }
        if (isset($_POST['Adventure'])) {
          array_push($array, "`Adventure` LIKE 1");
        }
        if (isset($_POST['Battleroyale'])) {
          array_push($array, "`Battle Royale` LIKE 1");
        }
        if (isset($_POST['Fighting'])) {
          array_push($array, "`Fighting` LIKE 1");
        }
        if (isset($_POST['Shooter'])) {
          array_push($array, "`Shooter` LIKE 1");
        }
        if (isset($_POST['Racing'])) {
          array_push($array, "`Racing` LIKE 1");
        }
        if (isset($_POST['RTS'])) {
          array_push($array, "`Real-Time Strategy` LIKE 1");
        }
        if (isset($_POST['RolePlaying'])) {
          array_push($array, "`Role-Playing` LIKE 1");
        }
        if (isset($_POST['Simulation'])) {
          array_push($array, "`Simulation` LIKE 1");
        }
        if (isset($_POST['Sports'])) {
          array_push($array, "`Sports` LIKE 1");
        }
        if (isset($_POST['Singleplayer'])) {
          array_push($array, "`Singleplayer` LIKE 1");
        }
        if (isset($_POST['Multiplayer'])) {
          array_push($array, "`Multiplayer` LIKE 1");
        }
        if (isset($_POST['Online'])) {
          array_push($array, "`Online` LIKE 1");
        }
        if (isset($_POST['Local'])) {
          array_push($array, "`Local` LIKE 1");
        }
        if (isset($_POST['Everyone'])) {
          array_push($array, "`E` LIKE 1");
        }
        if (isset($_POST['Everyone10'])) {
          array_push($array, "`E10` LIKE 1");
        }
        if (isset($_POST['Teen'])) {
          array_push($array, "`T` LIKE 1");
        }
        if (isset($_POST['Mature'])) {
          array_push($array, "`M` LIKE 1");
        }
        if (isset($_POST['quantity']) && $_POST['quantity'] != 0 && $_POST['quantity'] <= 100 && $_POST['quantity'] >= 0) {
          array_push($array, "`Price` BETWEEN " . ($_POST['quantity'] - 5) . " AND " . ($_POST['quantity'] + 5));
        }
        if (isset($_POST['quantity']) && ($_POST['quantity'] > 100 || $_POST['quantity'] < 0)) {
          array_push($array, "`Title` Like '%%'");
        }
        if (isset($_POST['Price'])) {
          array_push($array, "`Price` LIKE '%%'");
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && ($_POST['yearmin'] >= 2000) && ($_POST['yearmax'] <= 2020)) {
          array_push($array, "`Year` BETWEEN " . $_POST['yearmin'] . " AND " . $_POST['yearmax']);
        }
        if (isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] != '') && ($_POST['yearmax'] != '') && (($_POST['yearmin'] < 2000) || ($_POST['yearmax'] > 2020))) {
          array_push($array, "`Title` Like '%%'");
        }

        if (isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price']) && isset($_POST['quantity']) && $_POST['quantity'] == 0 && isset($_POST['yearmin']) && isset($_POST['yearmax']) && ($_POST['yearmin'] == '') && ($_POST['yearmax'] == '')) {
          $search = $_POST['gameSearch'];
          array_push($array, "`Title` LIKE '%$search%'");
        }
        if (!isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price'])) {
          array_push($array, "`Title` Like '%%'");
        }
        ?>
        <?php
        if (count($array) == 1) {
          $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[0] . " ORDER BY `Title` desc";
        } else {
          for ($j = 0; $j < count($array); $j++) {
            if ($j == 0) {
              $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[$j];
            } else if ($j == (count($array) - 1)) {
              $query .= " AND " . $array[$j] . " ORDER BY `Title` desc";
            } else {
              $query .= " And " . $array[$j];
            }
          }
        }
        ?>

        <?php

        $result = $db->query($query);
        $numRecords = $result->num_rows;

        for ($i = 0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc(); ?>

          <div class="container">
            <?php
            if ($i % 2 == 0) { ?>
              <div class="row games">
              <?php
            } else { ?>
                <div class="row games1">
                <?php
              }
                ?>

                <div class="col-lg-2 image">
                  <a href="gamePage.php" onclick="<?php $_SESSION['title'] = $_POST['title']; ?>"><img src="<?php echo htmlspecialchars($record['Picture']); ?>" alt="<?php echo htmlspecialchars($record['Title']); ?>" onmouseover="getTitle(this)" height="250" width="180" /></a>
                </div>
                <div class="col-lg-2">
                  <h3>Platform(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['PC']) == 1) {
                      echo "PC";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Xbox One']) == 1) {
                      echo "Xbox One";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Playstation 4']) == 1) {
                      echo "Playstation 4";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Nintendo Switch']) == 1) {
                      echo "Nintendo Switch";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Genre(s):</h3>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Action']) == 1) {
                      echo "Action";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Adventure']) == 1) {
                      echo "Adventure";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Battle Royale']) == 1) {
                      echo "Battle Royale";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Fighting']) == 1) {
                      echo "Fighting";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Shooter']) == 1) {
                      echo "Shooter";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Racing']) == 1) {
                      echo "Racing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Real-Time Strategy']) == 1) {
                      echo "Real-Time Strategy";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Role-Playing']) == 1) {
                      echo "Role-Playing";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Simulation']) == 1) {
                      echo "Simulation";
                    }
                    ?>
                  </p>
                  <p>
                    <?php
                    if (htmlspecialchars($record['Sports']) == 1) {
                      echo "Sports";
                    }
                    ?>
                  </p>
                </div>
                <div class="col-lg-2">
                  <h3>Rating:</h3>
                  <p><?php echo htmlspecialchars($record['Rating']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Price:</h3>
                  <p><?php echo htmlspecialchars($record['Price']); ?></p>
                </div>
                <div class="col-lg-2">
                  <h3>Description:</h3>
                  <p style="height: 200px; overflow: auto;"><?php echo htmlspecialchars($record['Description']); ?></p>
                </div>
                </div>
              </div>

            <?php
          }
            ?>
      </section>

    <?php
      // Finally, let's close the database
      // $result->free();
      $db->close();
    }
    ?>
  </section>
</body>

</html>