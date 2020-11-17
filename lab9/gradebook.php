<html>
<head>
    <link rel="stylesheet" type= "text/css" href="gradebook.css">
    <title>SQL Gradebook</title>
</head>
<body>
  <div id='main'>

  <form method="post" action="gradebook.php">
    <input type="text" name="crn" id="crn" placeholder="Course&nbsp;Registration&nbsp;Number" />
    <input type="text" name="prefix" id="prefix" placeholder="Prefix" />
    <input type="text" name="number" id="number" placeholder="Number" />
    <input type="text" name="title" id="title" placeholder="Title" />
    <input type="text" name="section" id="section" placeholder="Section" />
    <input type="text" name="year" id="year" placeholder="Year" />
      <br/>
    <input type="submit" name="courses" value="Insert&nbsp;Course" />
      </form>
      <br/>
      <form method="post" action="gradebook.php">
    <input type="text" name="rin" id="rin" placeholder="RIN" />
    <input type="text" name="rcsid" id="rcsid" placeholder="RCSID" />
    <input type="text" name="first" id="first" placeholder="First&nbsp;Name" />
    <input type="text" name="last" id="last" placeholder="Last&nbsp;Name" />
    <input type="text" name="alias" id="alias" placeholder="Alias" />
    <input type="text" name="phone" id="phone" placeholder="Phone&nbsp;Number" />
    <input type="text" name="street" id="street" placeholder="Street" />
    <input type="text" name="city" id="city" placeholder="City" />
    <input type="text" name="state" id="state" placeholder="State" />
    <input type="text" name="zip" id="zip" placeholder="Zip" />
          <br/>
    <input type="submit" name="students" value="Insert&nbsp;Student" />
      </form>
      <br/>
      <form method="post" action="gradebook.php">
    <input type="text" name="gradesCRN" id="gradesCRN" placeholder="Course&nbsp;Registration&nbsp;Number" />
    <input type="text" name="gradesRIN" id="gradesRIN" placeholder="RIN" />
    <input type="text" name="grade" id="grade" placeholder="Grade" />
          <br/>
    <input type="submit" name="addGrades" value="Insert&nbsp;Grade" />
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
