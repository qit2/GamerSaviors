<?php
  $dbOk = false;
  $db=mysqli_connect("localhost","root","qtt0210", "final_project");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else {
    $dbOk = true; 
  }
  $havePost = isset($_POST["save"]);
  $errors = '';
  if ($havePost){
    $email = htmlspecialchars(trim($_POST["email"]));
    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim($_POST["password"]));
    $re_password = htmlspecialchars(trim($_POST["re_password"]));
    $focusId = '';
    if ($email == '') {
      $errors .= '<li>Email may not be blank</li>';
      if ($focusId == '') $focusId = '#email';
    }
    if ($username == '') {
      $errors .= '<li>Username may not be blank</li>';
      if ($focusId == '') $focusId = '#username';
    }
    if ($password == '') {
      $errors .= '<li>Password may not be blank</li>';
      if ($focusId == '') $focusId = '#password';
    }
    if ($errors != '') {
      echo '<div class="messages"><h4>Please correct the following errors:</h4><ul>';
      echo $errors;
      echo '</ul></div>';
      echo '<script type="text/javascript">';
      echo '  $(document).ready(function() {';
      echo '    $("' . $focusId . '").focus();';
      echo '  });';
      echo '</script>';
    }
    
    else { 
      if ($dbOk) {
        $emailForDb = trim($_POST["email"]);  
        $usernameForDb = trim($_POST["username"]);
        $passwordForDb = trim($_POST["password"]);
        $insQuery = "insert into customer (`Email`,`Username`,`Password`) values(?,?,?)";
        $statement = $db->prepare($insQuery);
        $statement->bind_param("sss",$emailForDb,$usernameForDb,$passwordForDb);
        $statement->execute();
        echo '<div class="messages"><h4> Success! Congratulation to join literlyGame!</h4>';
        echo '</div>';
        $statement->close();
      }
    }
  } 
  ?>    



<!DOCTYPE html>
 <html lang="en-us">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <title>Sign Up</title>
   <link rel="stylesheet" type= "text/css" href="sign.css">
   <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
   <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
   <script src="sign.js"></script>
  </head>
  <body>
    <div class = "signin">
    <form method="post" action="sign_up.php" method="post" onsubmit="return validate(this);">

            <h1>Sign Up</h1>
            <div class="value"><input class="boxx" type = "text" name="email" id="email" placeholder="Enter Email" required  value="<?php if($havePost && $errors != '') { echo $email; } ?>"/></div>
            <div class="value"><input class="boxx" type = "text" name="username" id="username" placeholder="Enter Username" required  value="<?php if($havePost && $errors != '') { echo $username; } ?>"/></div>
            <div class="value"><input class="boxx" type = "password" name="password" id="password" placeholder="Enter Password" required  value="<?php if($havePost && $errors != '') { echo $password; } ?>"/></div>
            <div class="value"><input class="boxx" type = "password" name="re_password" id="re_password" placeholder="Re-enter Password" required  value="<?php if($havePost && $errors != '') { echo $password; } ?>"/></div>
            <input type="submit"  value="Sign up" id="save" name="save" />
            <pre> Have an account already? <a class = "sign_up" href = "sign_in.html">SIGN IN</a></pre>

    </div>
    </form>
    
  </body>
  </html>
