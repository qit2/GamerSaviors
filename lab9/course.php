<?php
  $dbOk = false;
  $db=mysqli_connect("localhost","root","username", "password");
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
    $prefix = htmlspecialchars(trim($_POST["prefix"]));
    $number = htmlspecialchars(trim($_POST["number"]));
    $title = htmlspecialchars(trim($_POST["title"]));
    $section = htmlspecialchars(trim($_POST["section"]));
    $year = htmlspecialchars(trim($_POST["year"]));
    $focusId = '';
    if ($crn == '') {
      $errors .= '<li>CRN may not be blank</li>';
      if ($focusId == '') $focusId = '#crn';
    }
    if ($prefix == '') {
      $errors .= '<li>Prefix may not be blank</li>';
      if ($focusId == '') $focusId = '#prefix';
    }
    if ($number == '') {
      $errors .= '<li>Number may not be blank</li>';
      if ($focusId == '') $focusId = '#number';
    }
    if ($title == '') {
      $errors .= '<li>Title may not be blank</li>';
      if ($focusId == '') $focusId = '#title';
    }
    if ($section == '') {
      $errors .= '<li>Prefix may not be blank</li>';
      if ($focusId == '') $focusId = '#section';
    }
    if ($year == '') {
      $errors .= '<li>Year may not be blank</li>';
      if ($focusId == '') $focusId = '#year';
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
      $prefixForDb = trim($_POST["prefix"]);
      $numberForDb = trim($_POST["number"]);
      $titleForDb = trim($_POST["title"]);  
      $sectionForDb = trim($_POST["section"]);
      $yearForDb = trim($_POST["year"]);
      $insQuery = "insert into courses (`CRN`,`Prefix`,`Number`, `Title`, `Section`, `Year`) values(?,?,?,?,?,?)";
      $statement = $db->prepare($insQuery);
      $statement->bind_param("ssssss",$crnForDb,$prefixForDb,$numberForDb,$titleForDb,$sectionForDb,$yearForDb);
      $statement->execute();
      echo '<div class="messages"><h4>Success: ' . $statement->affected_rows . ' course(s) added to database.</h4>';
      echo $crn . ' ' . $prefix . ' ' . $number .' ' . $title . '</div>';
      $statement->close();
    }
  }
} 
?>


<html>
<head>
    <link rel="stylesheet" type= "text/css" href="gradebook.css">
    <title>SQL Gradebook - courses</title>
</head>
<body>
  <div id='main'>


  <form method="post" action="course.php" method="post" onsubmit="return validate(this);">
    <fieldset>
    <label class="field" for="crn">CRN:</label>
    <div class="value"><input type="text" name="crn" id="crn" placeholder="Course&nbsp;Registration&nbsp;Number" value="<?php if($havePost && $errors != '') { echo $crn; } ?>"/></div>
    <label class="field" for="prefix">Prefix:</label>
    <div class="value"><input type="text" name="prefix" id="prefix" placeholder="Prefix" value="<?php if($havePost && $errors != '') { echo $prefix; } ?>"/></div>
    <label class="field" for="number">Number:</label>
    <div class="value"><input type="text" name="number" id="number" placeholder="Number" value="<?php if($havePost && $errors != '') { echo $number; } ?>"/></div>
    <label class="field" for="title">Title:</label>
    <div class="value"><input type="text" name="title" id="title" placeholder="Title" value="<?php if($havePost && $errors != '') { echo $title; } ?>"/></div>
    <label class="field" for="section">Section:</label>
    <div class="value"><input type="text" name="section" id="section" placeholder="Section" value="<?php if($havePost && $errors != '') { echo $section; } ?>"/></div>
    <label class="field" for="year">Year:</label>
    <div class="value"><input type="text" name="year" id="year" placeholder="Year" value="<?php if($havePost && $errors != '') { echo $year; } ?>"/></div>
    <br/>
    <input type="submit"  value="save" id="save" name="save" />
    </fieldset>
  </form>

  <form method="post" action="gradebook.php">
  <fieldset>
    <input type="text" name="gradesCRN" id="gradesCRN" placeholder="Course&nbsp;Registration&nbsp;Number" />
    <input type="text" name="gradesRIN" id="gradesRIN" placeholder="RIN" />
    <input type="text" name="grade" id="grade" placeholder="Grade" />
    <br/>
    <input type="submit" name="addGrades" value="Insert&nbsp;Grade" />
  </fieldset>
  </form>
  <br/>
      
    <form method="post" action="gradebook.php">
    <input type="submit" name="address" value="Add&nbsp;Address" />  
    <input type="submit" name="section" value="Add&nbsp;Section/Year" />  
    <input type="submit" name="grades" value="Create&nbsp;Grades" />  
  </form>
      
    </div>
    <div id="lists">
      <p id="lexicographic">
        <?php 

        ?>
      </p>
      <p id="overNinety">
        <?php

        ?>
      </p>
      <p id="averageGrade">
        <?php

        ?>
      </p>
      <p id="numStudents">
        <?php

        ?>
      </p>
    </div>
</body>
</html>
