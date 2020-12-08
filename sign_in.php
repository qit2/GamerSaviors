<?php
// Initialize the session
//session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//  header("location: welcome.php");
//  exit;
//}
$link = mysqli_connect("localhost","root","qtt0210", "final_project");
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);
  // Validate credentials
      // Prepare a select statement
      $sql = "SELECT Email, Username, hashed FROM customer WHERE username = ?";
      
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        
        // Set parameters
        $param_username = $username;
        //$param_password = password_hash($password, PASSWORD_DEFAULT);
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Store result
            mysqli_stmt_store_result($stmt);
            
            // Check if username exists, if yes then verify password
            if(mysqli_stmt_num_rows($stmt) == 1){                    
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $email, $username, $hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        // Password is correct, so start a new session
                        session_start();
                        
                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["email"] = $email;
                        $_SESSION["username"] = $username;                            
                        //echo "Success!";
                        // Redirect user to welcome page
                        header("location: index.html");
                    } else{
                        // Display an error message if password is not valid
                        $password_err = "The password you entered was not valid.";
                    }
                }
            } else{
                // Display an error message if username doesn't exist
                $username_err = "No account found with that username.";
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
  // Close connection
  mysqli_close($link);
}
?>




<!DOCTYPE html>
 <html lang="en-us">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <title>Sign In</title>
   <link rel="stylesheet" type= "text/css" href="sign.css">
   <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
   <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
   <script src="sign.js"></script>
  </head>
  <body>
    <div class = "signin">
    <form method="post" action="sign_in.php" method="post" onsubmit="return validate(this);">
      <h1>Sign In</h1>
      <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
        <input class="boxx" type = "text" id = "username" name = "username" placeholder="Enter Username" required value="<?php echo $username; ?>">
        <span class="help-block"><?php echo $username_err; ?></span>
      </div>
      <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <input class="boxx" type = "password" id = "password" name = "password" placeholder="Enter Password" required>
        <span class="help-block"><?php echo $password_err; ?></span>
      <a href="main.php"><button>Sign In</button></a>
      <pre><input type = "checkbox" name = "Remember me" checked = "checked">Remember Me<a href = "">                Forget Password?</a></pre>
      <pre> Don't have an account yet? <a class = "sign_up" href = "sign_up.php">SIGN UP NOW!</a></pre>
    </form>    
    </div>

    
  </body>
  </html>
