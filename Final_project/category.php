<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <title>forum</title>
    <link rel="stylesheet" href="forum.css" type="text/css">
</head>
<body>
<h2>Create a Discussion</h2>

<form method="post" action="category.php">
    Discussion name: <input type="text" name="category_name" id = "category_name" required/>
    <br>
    Discussion description: <br><textarea name="category_description" id="category_description" required/></textarea>
    <br>
    <input type="submit" value="Add Discussion" id="save" name="save"/>
 </form>
</body>
</html>
 <?php
$db = mysqli_connect("localhost","root","qtt0210", "final_project");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
$dbOk = true;
}
$havePost = isset($_POST["save"]);
if ($havePost) {
    if ($dbOk){
        $category_name = trim($_POST["category_name"]);
        $category_description = trim($_POST["category_description"]);
        //the form has been posted, so save it
        $sql = "INSERT INTO categories(category_name, category_description) VALUES(?,?)";
        if ($stmt = mysqli_prepare($db, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $param_category_name, $param_category_description);
            $param_category_name = $category_name;
            $param_category_description = $category_description;

            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                echo 'New category successfully added.';
                echo '<br>';
                echo '<a href = "forum.php">Back to Discussion forum</a>';
            } 
            else {
                echo "Something went wrong. Please try again later.";
            }
        }
    }
}





?>