<link rel="stylesheet" href="forum.css" type="text/css">
<?php
$db = mysqli_connect("localhost","root","qtt0210", "final_project");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
$dbOk = true;
}
if ($dbOk){
    $sql = "SELECT category_id, category_name FROM categories WHERE category_id  = $_GET[id]";
    $result = $db->query($sql);
    if(!$result){
        echo 'The category could not be displayed, please try again later.';
    }
    else
    {
        if(mysqli_num_rows($result) == 0){
            echo 'This category does not exist.';
        }
        else{
            //display category data
            while($row = mysqli_fetch_assoc($result)){
                echo '<h2>Topics in ′' . $row['category_name'] . '′ category</h2>';
            }
        
            //do a query for the topics
            $sql = "SELECT topic_id, topic_subject, topic_date, topic_category FROM topics WHERE topic_category = $_GET[id]";     
            $result = $db->query($sql);
            if(!$result){
                echo 'The topics could not be displayed, please try again later.';
            }
            else{
                if(mysqli_num_rows($result) == 0){
                    echo 'There are no topics in this category yet.';
                }
                else{
                    //prepare the table
                    echo '<table border="1">
                        <tr>
                            <th>Topic</th>
                            <th>Created at</th>
                        </tr>'; 
                        
                    while($row = mysqli_fetch_assoc($result)){               
                        echo '<tr>';
                            echo '<td class="leftpart">';
                                echo '<h3><a href="show_topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><h3>';
                            echo '</td>';
                            echo '<td class="rightpart">';
                                echo date('d-m-Y', strtotime($row['topic_date']));
                            echo '</td>';
                        echo '</tr>';
                    }
                }
            }
        }
    }
    






}