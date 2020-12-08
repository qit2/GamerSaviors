<?php
$dbOk = false;
$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err = "";

// Connection Format: ("host", "username", "password“，”database").
$db = mysqli_connect("localhost", "root", "", "loginpasswd");

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
        $sql = "SELECT username FROM info WHERE username = ?";

        if ($stmt = mysqli_prepare($db, $sql)) {
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "s", trim($_POST["username"]));

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
        $sql = "INSERT INTO info (email, username, password, hashed) VALUES (?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($db, $sql)) {
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "ssss", $param_email, $param_username, $param_password, $param_hashed);

          // Set parameters
          $param_email = $email;
          $param_username = $username;
          $param_password = $password;
          $param_hashed = hash("sha256", $password); // Safe Hash built-in PHP

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
  if ($errors != '') {
  }
}



/*
function login($dbOk)
{
  // Initialize the session
  session_start();
  // Check if the user is already logged in, if yes then redirect him to welcome page
  if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
  }

  // Define variables and initialize with empty values
  $username = $password = "";
  $username_err = $password_err = "";

  // Processing form data when form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
      $username_err = "Please enter username.";
    } else {
      $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
      $password_err = "Please enter your password.";
    } else {
      $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
      // Prepare a select statement
      $sql = "SELECT id, username, password FROM users WHERE username = ?";

      if ($stmt = mysqli_prepare($dbOk, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        // Set parameters
        $param_username = $username;

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
          // Store result
          mysqli_stmt_store_result($stmt);

          // Check if username exists, if yes then verify password
          if (mysqli_stmt_num_rows($stmt) == 1) {
            // Bind result variables
            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
            if (mysqli_stmt_fetch($stmt)) {
              if (password_verify($password, $hashed_password)) {
                // Password is correct, so start a new session
                session_start();

                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;

                // Redirect user to welcome page
                header("location: welcome.php");
              } else {
                // Display an error message if password is not valid
                $password_err = "The password you entered was not valid.";
              }
            }
          } else {
            // Display an error message if username doesn't exist
            $username_err = "No account found with that username.";
          }
        } else {
          echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
      }
    }

    // Close connection
    mysqli_close($dbOk);
  }
}

*/
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