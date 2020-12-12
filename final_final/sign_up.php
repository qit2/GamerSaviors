<?php
$dbOk = false;
$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err = "";

// Connection Format: ("host", "username", "password“，”database").
$db = mysqli_connect("localhost","root","qtt0210", "final_project");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
  $dbOk = true;
}
$havePost = isset($_POST["save"]);
$errors = '';
if ($havePost) {
  if ($dbOk) {
    // Define variables and initialize with empty values
    $username = $password = $confirm_password = $email = "";
    $username_err = $password_err = $confirm_password_err = $email_err = "";

    // Processing form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      // Validate E-mail
      if (empty(trim($_POST["email"]))) {
        $email_err = "Invalid e-mail address";
      } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid e-mail format";
      } else {
        $email = trim($_POST["email"]);
      }

      // Validate username
      if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
      } else {
        // Prepare a select statement
        $sql = "SELECT username FROM customer WHERE username = ?";

        if ($stmt = mysqli_prepare($db, $sql)) {
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "s", $param_username);

          // Set parameters
          $param_username = trim($_POST["username"]);

          // Attempt to execute the prepared statement
          if (mysqli_stmt_execute($stmt)) {
            /* store result */
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
              $username_err = "This username is already taken.";
            } else {
              $username = trim($_POST["username"]);
            }
          } else {
            echo "Oops! Something went wrong. Please try again later.";
          }

          // Close statement
          mysqli_stmt_close($stmt);
        }
      }

      // Validate password
      if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
      } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
      } else {
        $password = trim($_POST["password"]);
      }

      // Validate confirm password
      if (empty(trim($_POST["re_password"]))) {
        $confirm_password_err = "Please confirm password.";
      } else {
        $confirm_password = trim($_POST["re_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
          $confirm_password_err = "Password did not match.";
        }
      }

      // Check input errors before inserting in database
      if (empty($email_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO customer (Email, Username, Password, hashed, hash_active, active) VALUES (?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($db, $sql)) {
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "ssssss", $param_email, $param_username, $param_password, $param_hashed, $param_hash_active, $param_active);

          // Set parameters
          $param_email = $email;
          $param_username = $username;
          $param_password = $password;
          //$param_hashed = hash("sha256", $password); // Safe Hash built-in PHP
          $param_hashed = password_hash($password, PASSWORD_DEFAULT); // Safe Hash built-in PHP
          $param_hash_active =md5( rand(0,1000) );
          $param_active = 0; 
          
          // Attempt to execute the prepared statement
          if (mysqli_stmt_execute($stmt)) {
            // Redirect to login page
            header("location: sign_in.php");
          } else {
            echo "Something went wrong. Please try again later.";
          }

          // Close statement
          mysqli_stmt_close($stmt);
        }
      }
      

      $to      = $email; // Send email to our user
      $subject = 'Signup | Verification'; // Give the email a subject
      $sql = "SELECT hash_active FROM customer WHERE username = $username";
      $result = $db->query($sql);
      $message = '
        
      Thanks for signing up!
      Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
        
      ------------------------
      Username: '.$username.'
      Password: '.$password.'
      ------------------------
        
      Please click this link to activate your account:
      http://www.literallygames.com/verify.php?email='.$email.'&hash='.$param_hash_active.'

      '; // Our message above including the link


                            
      $headers = 'From:noreply@literallygames.com' . "\r\n"; // Set from headers

      //echo $to, $subject, $message, $headers;

      mail($to, $subject, $message, $headers); // Send our email

      // Close connection
      mysqli_close($db);
    }
    /*$emailForDb = trim($_POST["email"]);
      $usernameForDb = trim($_POST["username"]);
      $passwordForDb = trim($_POST["password"]);
      $insQuery = "insert into customer (`Email`,`Username`,`Password`) values(?,?,?)";
      $statement = $db->prepare($insQuery);
      $statement->bind_param("sss", $emailForDb, $usernameForDb, $passwordForDb);
      $statement->execute();
      header("Location: success.html");
      //echo '<div class="messages"><h4> Success! Congratulation to join literlyGame!</h4>';
      //echo '</div>';
      $statement->close();*/
  }

}

?>



<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="sign.css">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

  <script src="sign.js"></script>
</head>

<body>
  <div class="signin">
    <form method="post" action="sign_up.php">

      <h1>Sign Up</h1>
      <div class="value">
        <input class="boxx" type="text" name="email" id="email" placeholder="Enter Email" required>
        </div><p class="errormsg"><?php echo $email_err; ?></p>
      
      <div class="value">
        <input class="boxx" type="text" name="username" id="username" placeholder="Enter Username" required>
        </div><p class="errormsg"><?php echo $username_err; ?></p>
      
      <div class="value">
        <input class="boxx" type="password" name="password" id="password" placeholder="Enter Password" required>
        </div><p class="errormsg"><?php echo $password_err; ?></p>
      
      <div class="value">
        <input class="boxx" type="password" name="re_password" id="re_password" placeholder="Re-enter Password" required>
        </div><p class="errormsg"><?php echo $confirm_password_err; ?></p>
      
      <input type="submit" value="Sign up" id="save" name="save" />
      <pre> Have an account already? <a class = "sign_up" href = "sign_in.php">SIGN IN</a></pre>


    </form>
  </div>
</body>

</html>