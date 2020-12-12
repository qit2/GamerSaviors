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
$post_topic = $_GET['id'];
if ($dbOk){
    $sql = "INSERT INTO posts(post_date, post_topic, post_by) VALUES(?,?,?)";
    if ($stmt = mysqli_prepare($db, $sql)) {
        mysqli_stmt_bind_param($stmt, "sss", $param_date, $param_topic_id, $param_by);
        $param_date = date("Y-m-d H:i:s");
        $param_topic_id =$post_topic;
        session_start();
        $param_by = $_SESSION["username"];
        if (mysqli_stmt_execute($stmt)) {
            echo 'successfully added.';
        } 
        else {
            echo "Something went wrong.";
        }
        mysqli_stmt_close($stmt);
    }
}
$havePost = isset($_POST["save"]);
if ($havePost) {
    if ($dbOk){
        $reply_content = trim($_POST["reply_content"]);
        $result = mysqli_query($db, "SELECT MAX(post_id) FROM posts");
        $row = $result->fetch_assoc();
            foreach($row as $key => $value){
                $postid = $value;
            }
        
        $sql = "INSERT INTO posts(post_content) VALUES(?) WHERE post_topic = $postid";
        if ($stmt = mysqli_prepare($db, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_topic_id);
            $param_topic_id = $reply_content;
            if (mysqli_stmt_execute($stmt)) {
                echo 'total successfully added.';
            } 
            else {
                echo "total Something went wrong.";
            }
            mysqli_stmt_close($stmt);
        }

         
    }
}  
?>