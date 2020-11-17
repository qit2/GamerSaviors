<?php
  $dbOk = false;
  $db=mysqli_connect("localhost","root","qtt0210", "websyslab9");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else {
    $dbOk = true; 
  }
  $havePost = isset($_POST["save"]);
  $errors = '';
  if ($havePost){
    $crn = htmlspecialchars(trim($_POST["crn"]));
    $rin = htmlspecialchars(trim($_POST["rin"]));
    $grade = htmlspecialchars(trim($_POST["grade"]));

    $focusId = '';
    if ($crn == '') {
        $errors .= '<li>CRN may not be blank</li>';
        if ($focusId == '') $focusId = '#crn';
      }
    if ($rin == '') {
      $errors .= '<li>Rin may not be blank</li>';
      if ($focusId == '') $focusId = '#rin';
    }
    if ($grade == '') {
      $errors .= '<li>Grade may not be blank</li>';
      if ($focusId == '') $focusId = '#grade';
    }


  if ($errors != '') {
    echo '<div class="messages"><h4>Please correct the following errors:</h4><ul>';
    echo $errors;
    echo '</ul></div>';
    echo '<script type="text/javascript">';
    echo '  $(document).ready(function() {';
    echo '    $("' . $focusId . '").focus();';
    echo '  });';
    echo '</script>';
  }
  else { 
    if ($dbOk) {
      $crnForDb = trim($_POST["crn"]);
      $rinForDb = trim($_POST["rin"]);  
      $gradeForDb = trim($_POST["grade"]);
     


      $insQuery = "insert into grades (`CRN`,`RIN`,`Grade`) values(?,?,?)";
      $statement = $db->prepare($insQuery);
      $statement->bind_param("sss",$crnForDb,$rinForDb,$gradeForDb);
      $statement->execute();
      echo '<div class="messages"><h4>Success: ' . $statement->affected_rows . ' grade(s) added to database.</h4>';
      echo $crn . ' ' . $rin . ' ' . $grade . '</div>';
      $statement->close();
    }
  }
} 

?>

<html>
<head>
    <link rel="stylesheet" type= "text/css" href="gradebook.css">
    <title>SQL Gradebook - Students</title>
</head>
<body>
    <div id='main'>
    <form method="post" action="grade.php">
    <fieldset>
    <label class="field" for="rin">CRN:</label>
    <div class="value"><input type="text" name="crn" id="crn" placeholder="Course&nbsp;Registration&nbsp;Number" value="<?php if($havePost && $errors != '') { echo $crn; } ?>"/></div>
    <label class="field" for="rin">RIN of Student:</label>
    <div class="value"><input type="text" name="rin" id="rin" placeholder="RIN" value="<?php if($havePost && $errors != '') { echo $rin; } ?>"/></div>
    <label class="field" for="grade">Grade of the class:</label>
    <div class="value"><input type="text" name="grade" id="grade" placeholder="Grade" value="<?php if($havePost && $errors != '') { echo $grade; } ?>"/></div>
    <br/>
    <input type="submit"  value="save" id="save" name="save" />
  </fieldset>
  </form>
  </div>
  <br/>
</body>
</html>


<?php
$sql = "SELECT CRN, AVG(grade) FROM grades Group by CRN";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "The average grade of ". $row['CRN']. " is ".$row['AVG(grade)'];
            echo "<br />";
        }
    } 
    else{
        echo "No records matching your query were found.";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

$query = "SELECT CRN, COUNT(RIN) as TotalStudent FROM grades Group by CRN";
if($result = mysqli_query($db, $query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "The average grade of ". $row['CRN']. " is ".$row['TotalStudent'];
            echo "<br />";
        }
    } 
    else{
        echo "No records matching your query were found.";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
?>