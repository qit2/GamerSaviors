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


    <p>hello</p>
    <?php
      
  /* Create a new database connection object, passing in the host, username,
        password, and database to use. The "@" suppresses errors. */
      @ $db = new mysqli('localhost', 'root', '123root', 'Literally Games');
        
      $dbOk = true; 
    ?>
    <?php
      if ($dbOk) {
        $query = "SELECT * FROM `TABLE 1`";
        $result = $db->query($query);
        $numRecords = $result->num_rows;

        for ($i=0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc();
          if (htmlspecialchars($record['newpage']) == 1) {
            echo htmlspecialchars($record['Title']);
          }
        }
      }
    ?>
  </body>
</html>