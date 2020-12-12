<link rel="stylesheet" href="forum.css" type="text/css">
<h2>Reply:</h2>
<form method="post" action="reply.php">
    <input type="text" name="reply_content" id = "content" required/>
    <br><br><br><br><br><br>
    <input type="submit" value="Reply" id="save" name="save"/>
</form>

<?php
$db = mysqli_connect("localhost","root","qtt0210", "final_project");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
else {
$dbOk = true;
}
$topicsubject = $_GET['id'];
$result = mysqli_query($db, "SELECT topic_id, topic_subject FROM topics WHERE topic_subject = '$topicsubject'");
$row = $result->fetch_assoc();
    foreach($row as $key => $value){
        $topicid = $value;
        session_start();
        $_SESSION["topicsubject"] = $topicid;
    }
$havePost = isset($_POST["save"]);
if ($havePost) {
    if ($dbOk){
        $reply_content = trim($_POST["reply_content"]);
        $sql = "INSERT INTO posts(post_content, post_date, post_topic, post_by) VALUES(?,?,?,?)";
        if ($stmt = mysqli_prepare($db, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssss", $param_messsage, $param_date, $param_topic_id, $param_by);
            $param_messsage = $reply_content;
            $param_date = date("Y-m-d H:i:s");
            $param_topic_id = $topicid;
            //session_start();
            $param_by = $_SESSION["username"];
            echo $param_topic_id;
            if (mysqli_stmt_execute($stmt)) {
                echo 'New message successfully added.';
                echo '<a href = "forum.php">Back to Discussion forum</a>';
            } 
            else {
                echo "Something went wrong while inserting the post. Please try again later.";
            }
        }
    }
}  
?>