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
    <?php

    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    echo "<form method='POST' action='".editComments($conn)."'>
      <input type='hidden' name='cid' value='".$cid."'>
      <input type='hidden' name='uid' value='".$uid."'>
      <input type='hidden' name='date' value='".$date."'>
      <textarea name='message'>".$message."</textarea></br>
      <button type='submit' name='commentSubmit'>Edit</button>
    </form>";
    ?>
  </body>
</html>
