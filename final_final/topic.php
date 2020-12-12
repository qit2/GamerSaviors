<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <title>forum</title>
    <link rel="stylesheet" href="forum.css" type="text/css">
</head>
<body>
<h2>Create a Topic</h2>
<form method="post" action="topic.php">
    Category: <select name="topic_category">
    <?php
        $db = mysqli_connect("localhost","root","qtt0210", "final_project");
        $result = mysqli_query($db, "SELECT category_id, category_name FROM categories");
        echo '';
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<option value="' . $row['category_id'] . '">' . $row['category_name'] . '</option>';
        }
    ?>
    </select>
    <br>
    Subject: <br><input type="text" name="subject" id = "content" required/>
    <br><br><br><br>
    Message: <br><input type="text" name="message" id = "content" required/>
    <br><br><br><br>
    <input type="submit" value="Add Topic" id="save" name="save"/>
 </form>

</body>
</html>
 <?php
$db = mysqli_connect("localhost","root","qtt0210", "final_project");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
else {
$dbOk = true;
}
$havePost = isset($_POST["save"]);
if ($havePost) {
    if ($dbOk){
        $subject = trim($_POST["subject"]);
        $category = trim($_POST["topic_category"]);
        $message = trim($_POST["message"]);
        //the form has been posted, so save it
        $sql = "INSERT INTO topics(topic_subject, topic_category, topic_date, topic_by) VALUES(?,?,?,?)";
        if ($stmt = mysqli_prepare($db, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssss", $param_subject, $param_category, $param_date, $param_by);
            $param_subject = $subject;
            $param_category = $category;
            $param_date = date("Y-m-d H:i:s");
            $param_by = $_SESSION["username"];
            if (mysqli_stmt_execute($stmt)) {
                echo 'New topic successfully added.';
                echo '<br>';
            } 
            else {
                echo "Something went wrong while inserting the topic. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
        $result = mysqli_query($db, "SELECT MAX(topic_id) FROM topics");
        $row = $result->fetch_assoc();
            foreach($row as $key => $value){
                $topicid = $value;
            }
        $sql = "INSERT INTO posts(post_content, post_date, post_topic, post_by) VALUES(?,?,?,?)";
        if ($stmt = mysqli_prepare($db, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssss", $param_messsage, $param_date, $param_topic_id, $param_by);
            $param_messsage = $message;
            $param_date = date("Y-m-d H:i:s");
            $param_topic_id = $topicid;
            $param_by = $_SESSION["username"];
            if (mysqli_stmt_execute($stmt)) {
                echo 'New message successfully added.';
                echo '<br>';
                echo '<a href = "forum.php">Back to Discussion forum</a>';
            } 
            else {
                echo "Something went wrong while inserting the post. Please try again later.";
            }
        }
    }
}
?>