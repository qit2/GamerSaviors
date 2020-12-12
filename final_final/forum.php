<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>PHP-MySQL forum</title>
    <link rel="stylesheet" href="forum.css" type="text/css">
    <link rel="stylesheet" href="main.css" type="text/css">

    <nav>
      <ul class="navs">
        <li id="teamname" onclick="Prankfunction()">LiterallyGames</li>
        <li><a href="main.php">Home</a></li>
        <li><a id="about" onmouseover="prankfunction()" onmouseout="prankrestored()" href="http://www.innersloth.com/gameAmongUs.php">About Us</a><img id="cyan" src="cyan.png"></img></li>
        <div class="dropdown">
          <button class="dropbtn"><img id="navimg" src="unknow.jpg"></button>
          <div class="dropdown-content">
            <a href="#"><span class="settings" id="usernamehere"><?php echo $_SESSION["username"] ?></span></a>
            <a class="settings" href="sign_out.php">Logout</a>
          </div>
        </div>

      </ul>

    </nav>
</head>
<body>
<h1>Discussion forum</h1>
    <div id="wrapper">
    <div id="menu">
        <a class="item" href="topic.php">Create a topic</a> -
        <a class="item" href="category.php">Create a category</a>
    </div>
    </div>
</body>
</html>

<?php

$db = mysqli_connect("localhost","root","qtt0210", "final_project");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
$dbOk = true;
}
if ($dbOk){
    $sql = "SELECT category_id, category_name, category_description FROM categories";
    $result = $db->query($sql);

    if(!$result){
    echo 'The categories could not be displayed, please try again later.';
    }
    else{
        if(mysqli_num_rows($result) == 0){
        echo 'No categories defined yet.';
        }
        else{
        //prepare the table
            echo '<table border="1">
            <tr>
                <th>Category</th>
                <th>Last topic</th>
            </tr>'; 
            
            while($row = mysqli_fetch_assoc($result)){               
                echo '<tr>';
                    echo '<td class="leftpart">';
                        $id =  $row['category_id'];
                        echo '<h3><a href="show_category.php?id=' .$id. '">' . $row['category_name'] . '</a></h3>' . $row['category_description'];
                    echo '</td>';
                    echo '<td class="rightpart">';
                                echo '<a>Topic subject</a> at 10-10';
                    echo '</td>';
                echo '</tr>';
            }
        }
    }
}



?>