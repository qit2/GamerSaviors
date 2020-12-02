<!DOCTYPE html>
 <html lang="en-us">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <title>LiterallyGames Search</title>
   <link rel="stylesheet" type= "text/css" href="main.css">
   <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

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

              <div class="col-lg-6 mode">
                <h2>Mode</h2>
                  <input type="checkbox" name="Singleplayer" value="singleplayer">
                  <label class="marg" for="Singleplayer"> Singleplayer </label><br>
                  <input type="checkbox" name="Multi" value="multi">
                  <label class="marg" for="Multi"> Multiplayer </label><br>
                  <input type="checkbox" name="Online" value="online">
                  <label class="marg" for="Online"> Online </label><br>
                  <input type="checkbox" name="Local" value="local">
                  <label class="marg" for="Local"> Local </label><br>
              </div>

              <div class="col-lg-6 region">
                <h2>Region</h2>
                  <input type="checkbox" name="NTSCJ" value="NTSCJ">
                  <label class="marg" for="NTSC-J"> Japan and Asia (NTSC-J) </label><br>
                  <input type="checkbox" name="NTSC-U" value="NTSC-U">
                  <label class="marg" for="NTSC-U"> North America and South America (NTSC-U) </label><br>
                  <input type="checkbox" name="PAL" value="PAL">
                  <label class="marg" for="PAL"> Europe, New Zealand, Australia, Middle East, India, South Africa</label><br>
                  <input type="checkbox" name="NTSC-C" value="NTSC-C">
                  <label class="marg" for="NTSC-C"> China (NTSC-C) </label><br>
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
                  <input type="text" placeholder="$0 - $100" id="quantity" name="quantity"><br>
                  <input type="checkbox" name="Price" value="price">
                  <label class="marg" for="Price"> Any Amount </label><br>
              </div>

              <div class="col-lg-4 date">
                <h2>Release Date</h2>
                  <label class="fix" for="yearmin">Enter a date after 2000-01-01:</label>
                  <input type="text" id="datemin" name="yearmin" placeholder="YYYY"><br><br>
                  <input type="text" id="datemin" name="monthmin" placeholder="MM"><br><br>
                  <input type="text" id="datemin" name="daymin" placeholder="DD"><br><br>
                  <label class="fix" for="datemax">Enter a date before 2021-01-01:</label>
                  <input type="text" id="datemax" name="yearmax" placeholder="YYYY"><br><br>
                  <input type="text" id="datemax" name="monthmax" placeholder="MM"><br><br>
                  <input type="text" id="datemax" name="daymax" placeholder="DD"><br><br>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
    </section>




    <section id="games">
<?php
  
  /* Create a new database connection object, passing in the host, username,
     password, and database to use. The "@" suppresses errors. */
  @ $db = new mysqli('localhost', 'root', '123root', 'Literally Games');
    
  $dbOk = true; 
?>
<?php
  if ($dbOk) {
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
    if (isset($_POST['quantity']) && $_POST['quantity'] != 0) {
      array_push($array, "`Price` BETWEEN " . ($_POST['quantity']-5) . " AND " . ($_POST['quantity']+5));
    }
    if (isset($_POST['Price'])) {
      array_push($array, "`Price` LIKE '%%'");
    }
    if (isset($_POST['yearmin']) && isset($_POST['monthmin']) && isset($_POST['daymin']) && isset($_POST['yearmax']) && isset($_POST['monthmax']) && isset($_POST['daymax']) && ($_POST['yearmin'] != '') && ($_POST['monthmin'] != '') && ($_POST['daymin'] != '') && ($_POST['yearmax'] != '') && ($_POST['monthmax'] != '') && ($_POST['daymax'] != '')) {
      array_push($array, "`Year` BETWEEN " . $_POST['yearmin'] . " AND " . $_POST['yearmax'] . " AND " . "`Month` BETWEEN " . $_POST['monthmin'] . " AND " . $_POST['monthmax'] . " AND " . "`Day` BETWEEN " . $_POST['daymin'] . " AND " . $_POST['daymax']);
    }
    
    if (isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price']) && isset($_POST['quantity']) && $_POST['quantity'] == 0 && isset($_POST['yearmin']) && isset($_POST['monthmin']) && isset($_POST['daymin']) && isset($_POST['yearmax']) && isset($_POST['monthmax']) && isset($_POST['daymax']) && ($_POST['yearmin'] == '') && ($_POST['monthmin'] == '') && ($_POST['daymin'] == '') && ($_POST['yearmax'] == '') && ($_POST['monthmax'] == '') && ($_POST['daymax'] == '')){
      $search = $_POST['gameSearch'];
      array_push($array, "`Title` LIKE '%$search%'");
    }
    if (!isset($_POST['gameSearch']) && !isset($_POST['PC']) && !isset($_POST['XBOX1']) && !isset($_POST['Playstation4']) && !isset($_POST['Switch']) && !isset($_POST['Action']) && !isset($_POST['Adventure']) && !isset($_POST['Battleroyale']) && !isset($_POST['Fighting']) && !isset($_POST['Shooter']) && !isset($_POST['Racing']) && !isset($_POST['RTS']) && !isset($_POST['RolePlaying']) && !isset($_POST['Simulation']) && !isset($_POST['Sports']) && !isset($_POST['Singleplayer']) && !isset($_POST['Multiplayer']) && !isset($_POST['Online']) && !isset($_POST['Local']) && !isset($_POST['Everyone']) && !isset($_POST['Everyone10']) && !isset($_POST['Teen']) && !isset($_POST['Mature']) && !isset($_POST['Price'])){
      array_push($array, "`Title` Like '%%'");
    }

    //SELECT DISTINCT * FROM `TABLE 1` WHERE `Nintendo Switch` LIKE 1 AND `Action` Like 1 ORDER BY `Rating` desc
    if (count($array) == 1) {
      $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[0] . " ORDER BY `Price` desc";
    } else {
      for ($j=0; $j < count($array); $j++) {
        if ($j == 0) {
          $query .= "SELECT DISTINCT * FROM `TABLE 1` WHERE " . $array[$j];
        }
        else if ($j == (count($array) - 1)) {
          $query .= " AND " . $array[$j] . " ORDER BY `Rating` desc";
        }else {
          $query .= " And " . $array[$j];
        }
      }
    }

    echo $query;
    $result = $db->query($query);
    $numRecords = $result->num_rows;
    
    for ($i=0; $i < $numRecords; $i++) {
      $record = $result->fetch_assoc(); ?>

      <div class="container">
        <?php 
        if ($i % 2 == 0) {?>
          <div class="row games">
        <?php
        } else {?>
          <div class="row games1">
        <?php
        }
        ?>
        
          <div class="col-lg-2 image">
            <a href="gamePage.html"><img src="<?php echo htmlspecialchars($record['Picture']);?>" height="250" width="180"></a>
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
            <p><?php echo htmlspecialchars($record['Rating']);?></p>
          </div>
          <div class="col-lg-2">
            <h3>Price:</h3> 
            <p><?php echo htmlspecialchars($record['Price']);?></p>
          </div>
          <div class="col-lg-2">
            <h3>Description:</h3> 
            <p style="height: 200px; overflow: auto;"><?php echo htmlspecialchars($record['Description']);?></p>
          </div>
        </div>
      </div>


    <?php
    
      
    }





/*
    $id = [];
    $i = 0;
    if (mysqli_multi_query($db, $query)) {
      $full = [];
      do {
        // Store first result set
        if ($result = mysqli_store_result($db)) {
          while ($row = mysqli_fetch_row($result)) {
            if (!in_array($row[30], $id)) {
              array_push($id, $row[30]);
              array_push($full, [$row[22], $row[29], $row[1], $row[3], $row[5], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13], $row[14], $row[15], $row[16], $row[17], $row[27], $row[30]]);
            }
          }
          mysqli_free_result($result);
        }
        // if there are more result-sets, the print a divider
        if (mysqli_more_results($db)) {
          continue;
        }
         //Prepare next result set
      } while (mysqli_next_result($db));
    }

    rsort($full);

    for ($m = 0; $m < count($full); $m++) {?>
        <div class="container">
          <?php 
          if ($i % 2 == 0) {?>
            <div class="row games">
          <?php
          } else {?>
            <div class="row games1">
          <?php
          }
          $i += 1;
          ?>

          <div class="col-lg-2 image">
            <a href="gamePage.html"><img src="<?php echo $full[$m][1];?>" height="250" width="180"></a>
          </div>
          <div class="col-lg-2">
            <h3>Platform(s):</h3>
            <p>
              <?php 
                if ($full[$m][2] == 1) {
                  echo "PC";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][3] == 1) {
                  echo "Xbox One";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][4] == 1) {
                  echo "Playstation 4";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][5] == 1) {
                  echo "Nintendo Switch";
                }
              ?>
            </p>
          </div>
          <div class="col-lg-2">
            <h3>Genre(s):</h3> 
            <p>
              <?php 
                if ($full[$m][6] == 1) {
                  echo "Action";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][7] == 1) {
                  echo "Adventure";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][8] == 1) {
                  echo "Battle Royale";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][9] == 1) {
                  echo "Fighting";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][10] == 1) {
                  echo "Shooter";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][11] == 1) {
                  echo "Racing";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][12] == 1) {
                  echo "Real-Time Strategy";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][13] == 1) {
                  echo "Role-Playing";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][14] == 1) {
                  echo "Simulation";
                }
              ?>
            </p>
            <p>
              <?php 
                if ($full[$m][15] == 1) {
                  echo "Sports";
                }
              ?>
            </p>
          </div>
          <div class="col-lg-2">
            <h3>Rating:</h3> 
            <p><?php echo $full[$m][0];?></p>
          </div>
          <div class="col-lg-2">
            <h3>Price:</h3> 
            <p><?php echo $full[$m][16];?></p>
          </div>
          <div class="col-lg-2">
            <h3>Description:</h3> 
            <p style="height: 200px; overflow: auto;"><?php echo $full[$m][17];?></p>
          </div>
        </div>
      </div>
      <?php
    }
    $full = [];
    ?>
    */
    
    // Finally, let's close the database
    $result->free();
    $db->close();
  }
  
?>
    </section>
    
  <?php
    $a= [[8,"hello"],[8,"bye"],[5,"te"]];
    rsort($a);
    print_r($a);

  ?>
</body>
  </html>