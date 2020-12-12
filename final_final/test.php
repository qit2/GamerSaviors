<?php
        $db = mysqli_connect("localhost","root","qtt0210", "final_project");
        $name = 'Among us'
        $result = mysqli_query($db, "SELECT topic_id FROM topics WHERE topic_name = $name");
        //$num = mysqli_num_rows($result);
        //echo $num;
        //echo '';
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row['topic_id'];
        }


        echo date("Y-m-d H:i:s");






    ?>