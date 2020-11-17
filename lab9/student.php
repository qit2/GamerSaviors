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
    $rin = htmlspecialchars(trim($_POST["rin"]));
    $rcsid = htmlspecialchars(trim($_POST["rcsid"]));
    $firstName = htmlspecialchars(trim($_POST["firstName"]));
    $lastName = htmlspecialchars(trim($_POST["lastName"]));
    $alias = htmlspecialchars(trim($_POST["alias"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $street = htmlspecialchars(trim($_POST["street"]));
    $city = htmlspecialchars(trim($_POST["city"]));
    $state = htmlspecialchars(trim($_POST["state"]));
    $zip = htmlspecialchars(trim($_POST["zip"]));

    $focusId = '';
    if ($rin == '') {
      $errors .= '<li>Rin may not be blank</li>';
      if ($focusId == '') $focusId = '#rin';
    }
    if ($rcsid == '') {
      $errors .= '<li>RCSID may not be blank</li>';
      if ($focusId == '') $focusId = '#rcsid';
    }
    if ($firstName == '') {
      $errors .= '<li>First Name may not be blank</li>';
      if ($focusId == '') $focusId = '#firstName';
    }
    if ($lastName == '') {
      $errors .= '<li>Last Name may not be blank</li>';
      if ($focusId == '') $focusId = '#lastName';
    }
    if ($alias == '') {
      $errors .= '<li>Alias may not be blank</li>';
      if ($focusId == '') $focusId = '#alias';
    }
    if ($phone == '') {
      $errors .= '<li>Phone may not be blank</li>';
      if ($focusId == '') $focusId = '#phone';
    }
    if ($street == '') {
        $errors .= '<li>Street Name may not be blank</li>';
        if ($focusId == '') $focusId = '#street';
      }
      if ($city == '') {
        $errors .= '<li>City may not be blank</li>';
        if ($focusId == '') $focusId = '#city';
      }
      if ($state == '') {
        $errors .= '<li>State may not be blank</li>';
        if ($focusId == '') $focusId = '#state';
      }
      if ($zip == '') {
        $errors .= '<li>Zip may not be blank</li>';
        if ($focusId == '') $focusId = '#zip';
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
      $rinForDb = trim($_POST["rin"]);  
      $rcsidForDb = trim($_POST["rcsid"]);
      $firstNameForDb = trim($_POST["firstName"]);
      $lastNameForDb = trim($_POST["lastName"]);  
      $aliasForDb = trim($_POST["alias"]);
      $phoneForDb = trim($_POST["phone"]);
      $streetForDb = trim($_POST["street"]);
      $cityForDb = trim($_POST["city"]);
      $stateForDb = trim($_POST["state"]);
      $zipForDb = trim($_POST["zip"]);

      $insQuery = "insert into students (`RIN`,`RCSID`,`First_name`,`Last_name`,`Alias`,`Phone`,`Street`,`City`,`State`,`Zip`) values(?,?,?,?,?,?,?,?,?,?)";
      $statement = $db->prepare($insQuery);
      $statement->bind_param("ssssssssss",$rinForDb,$rcsidForDb,$firstNameForDb,$lastNameForDb,$aliasForDb,$phoneForDb,$streetForDb,$cityForDb,$stateForDb,$zipForDb);
      $statement->execute();
      echo '<div class="messages"><h4>Success: ' . $statement->affected_rows . ' Student(s) added to database.</h4>';
      echo $rin . ' ' . $rcsid . ' ' . $firstName .' ' . $lastName . '</div>';
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
    <h1>Student Information</h1>
<div id='main'>
<form method="post" action="student.php">
  <fieldset>
    <label class="field" for="rin">RIN:</label>
    <div class="value"><input type="text" name="rin" id="rin" placeholder="RIN" value="<?php if($havePost && $errors != '') { echo $rin; } ?>"/></div>
    <label class="field" for="rcsid">RCSID:</label>
    <div class="value"><input type="text" name="rcsid" id="rcsid" placeholder="RCSID" value="<?php if($havePost && $errors != '') { echo $rcsid; } ?>"/></div>
    <label class="field" for="firstName">First Name:</label>
    <div class="value"><input type="text" name="firstName" id="firstName" placeholder="First&nbsp;Name" value="<?php if($havePost && $errors != '') { echo $firstName; } ?>"/></div>
    <label class="field" for="lastName">Last Name:</label>
    <div class="value"><input type="text" name="lastName" id="lastName" placeholder="Last&nbsp;Name" value="<?php if($havePost && $errors != '') { echo $lastName; } ?>"/></div>
    <label class="field" for="alias">Alias:</label>
    <div class="value"><input type="text" name="alias" id="alias" placeholder="Alias" value="<?php if($havePost && $errors != '') { echo $alias; } ?>"/></div>
    <label class="field" for="phone">Phone:</label>
    <div class="value"><input type="text" name="phone" id="phone" placeholder="Phone&nbsp;Number" value="<?php if($havePost && $errors != '') { echo $phone; } ?>"/></div>
    <label class="field" for="street">Street:</label>
    <div class="value"><input type="text" name="street" id="street" placeholder="Street" value="<?php if($havePost && $errors != '') { echo $street; } ?>"/></div>
    <label class="field" for="city">City:</label>
    <div class="value"><input type="text" name="city" id="city" placeholder="City" value="<?php if($havePost && $errors != '') { echo $city; } ?>"/></div>
    <label class="field" for="state">State:</label>
    <div class="value"><input type="text" name="state" id="state" placeholder="State" value="<?php if($havePost && $errors != '') { echo $state; } ?>"/></div>
    <label class="field" for="zip">Zip:</label>
    <div class="value"><input type="text" name="zip" id="zip" placeholder="Zip" value="<?php if($havePost && $errors != '') { echo $zip; } ?>"/></div>
    <br/>
    <input type="submit"  value="save" id="save" name="save" />
  </fieldset>
  </form>
</div>
  <br/>
</body>
</html>

<?php
$sql = "SELECT * FROM students ORDER BY RIN, Last_Name, RCSID, First_Name";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>RIN</th>";
                echo "<th>RCSID</th>";
                echo "<th>First_name</th>";
                echo "<th>Last_name</th>";
                echo "<th>Alias</th>";
                echo "<th>Phone</th>";
                echo "<th>Street</th>";
                echo "<th>City</th>";
                echo "<th>State</th>";
                echo "<th>Zip</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['RIN'] . "</td>";
                echo "<td>" . $row['RCSID'] . "</td>";
                echo "<td>" . $row['First_name'] . "</td>";
                echo "<td>" . $row['Last_name'] . "</td>";
                echo "<td>" . $row['Alias'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
                echo "<td>" . $row['Street'] . "</td>";
                echo "<td>" . $row['City'] . "</td>";
                echo "<td>" . $row['State'] . "</td>";
                echo "<td>" . $row['Zip'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
?>