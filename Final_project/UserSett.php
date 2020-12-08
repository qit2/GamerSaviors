<?php
// Connection Format: ("host", "username", "password“，”database").
$db = mysqli_connect("localhost", "root", "", "loginpasswd");

// Initialize the session
session_start();

// Check if the user is logged in, otherwise redirect to login page
/*if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: sign_in.php");
    exit;
}*/

// Define variables and initialize with empty values
$password = $confirm_password = "";
$password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

    // Check input errors before updating the database
    if (empty($new_password_err) && empty($confirm_password_err)) {
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";

        if ($stmt = mysqli_prepare($db, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

            // Set parameters
            $param_password = hash("sha256", $new_password);
            $param_id = $_SESSION["id"];

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: sign_in.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="sign.css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <script src="sign.js"></script>
</head>

<body id="main">
    <div class="signin reset" id="resetpasswd" style = "width:17%;">
        <h1>Reset Your Password</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <div class="value">
                    <input class="boxx" type="password" name="password" id="password" placeholder="Enter New Password" required>
                </div>
                <p class="errormsg"><?php echo $password_err; ?></p>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <div class="value">
                    <input class="boxx" type="password" name="re_password" id="re_password" placeholder="Re-enter New Password" required>
                </div>
                <p class="errormsg"><?php echo $confirm_password_err; ?></p>
            </div>
            <input type="submit" value="Reset" id="save" name="save" />
            <a class="btn btn-link" href="main.php">Cancel</a>
        </form>
</body>

</html>