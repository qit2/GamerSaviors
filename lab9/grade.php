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
    <script src = "gradebook.js"></script>
    <title>SQL Gradebook - Grades</title>
</head>
<body>
  <nav id = "bar">
    <a href = "course.php" class = "navlink">Courses</a>
    <a href = "student.php" class = "navlink">Students</a>
    <a href = "#" class = "navlink">Grades</a>
  </nav>
  <h1>Grades Information</h1>
    <div class = "overall" id='main'>
    <form method="post" action="grade.php">
    <fieldset>
    <label class="field" for="rin">CRN:</label>
    <div class="value"><input type="text" name="crn" id="crn" placeholder="Course&nbsp;Registration&nbsp;Number" value="<?php if($havePost && $errors != '') { echo $crn; } ?>"/></div><br/>
    <label class="field" for="rin">RIN of Student:</label>
    <div class="value"><input type="text" name="rin" id="rin" placeholder="RIN" value="<?php if($havePost && $errors != '') { echo $rin; } ?>"/></div><br/>
    <label class="field" for="grade">Grade of the class:</label>
    <div class="value"><input type="text" name="grade" id="grade" placeholder="Grade" value="<?php if($havePost && $errors != '') { echo $grade; } ?>"/></div><br/>
    <br/>
    <input type="submit"  value="Save" id="save" name="save" />
    <button value="" onclick = "displaythr()">Display Average Grade</button>
    <button value="" onclick = "displayfou()">Display Numer of Students</button>
  </fieldset>
  </form>
  </div>
  <br/>
</body>
</html>

<h3>Average grade each course</h3>
<table>
<?php
$q = "SELECT CRN, AVG(grade) FROM grades Group by CRN";
$result = mysqli_query($db, $q);
echo '<tr id="avgrade">
<th>CRN</th>
<th>Average</th>
</tr>';
while($row = $result->fetch_assoc()) {
    echo '<tr>';
    foreach ($row as $key => $value) {
        echo "<td>$value </td>";
    }
    echo '</tr>';
}
?>
</table>

<h3>Number of student each course</h3>
<table>
<?php
$qu = "SELECT CRN, COUNT(RIN) as TotalStudent FROM grades Group by CRN";
$result = mysqli_query($db, $qu);
echo '<tr id="numstudent">
<th>RIN</th>
<th>Totalnumber</th>
</tr>';
while($row = $result->fetch_assoc()) {
    echo '<tr>';
    foreach ($row as $key => $value) {
        echo "<td>$value </td>";
    }
    echo '</tr>';
}
?>
</table>
