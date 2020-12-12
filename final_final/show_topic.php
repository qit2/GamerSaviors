<link rel="stylesheet" href="forum.css" type="text/css">
<?php
$db = mysqli_connect("localhost","root","qtt0210", "final_project");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
$dbOk = true;
}
if ($dbOk){
    $sql = "SELECT topic_id, topic_subject FROM topics WHERE topic_id  = $_GET[id]";
    $result = $db->query($sql);
    if(!$result){
        echo 'The topic could not be displayed, please try again later.';
    }
    else
    {
        if(mysqli_num_rows($result) == 0){
            echo 'This topic does not exist.';
        }
        else{
            //display category data
            while($row = mysqli_fetch_assoc($result)){
                $topicsubject = $row['topic_subject'];
                echo '<h2>Topics : ' . $row['topic_subject'] . '</h2>';
            }
        }
    }
    $topicid = $_GET['id'];
    $sql = "SELECT post_content, post_date, post_topic, post_by FROM posts WHERE post_topic  = $_GET[id]";
    $result = $db->query($sql);
    if(!$result){
        echo 'The POST could not be displayed, please try again later.';
    }
    else{
        if(mysqli_num_rows($result) == 0){
            echo 'There are no post in this topic yet.';
        }
        else{
            echo '<table border="1">
                <tr>
                    <th>Time & Author</th>
                    <th>Message</th>
                </tr>'; 
                
            while($row = mysqli_fetch_assoc($result)){               
                echo '<tr>';
                    echo '<td class="leftpart_topic">';
                        echo '<h3> Author :' . $row["post_by"] .  '<h3>';
                        echo '<br>';
                        echo '<h3> Time: ' . $row["post_date"] .  '<h3>';
                    echo '</td>';

                    echo '<td class="rightpart_topic">';
                        echo '<h3>' . $row["post_content"] .  '<h3>';
                    echo '</td>';
                echo '</tr>';
            }
            echo '</table>';
            echo '<a href="reply.php?id=' . $topicsubject. '" class = "reply">reply</a>';
        }
    }
}
?>
