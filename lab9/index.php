<!DOCTYPE html>
 <html lang="en-us">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <title>Lab9</title>
   <link rel="stylesheet" type= "text/css" href="styles.css">
   <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

   <script src="main.js">
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>

<button type="button" onclick="myFunction1();">Students Table</button>
<button type="button" onclick="myFunction2();">Courses Table</button>
<button type="button" onclick="myFunction3();">Grades Table</button>

  <?php
    $servername = "localhost";
    $username = "root";
    $password = "123root";
    $dataName = "websyslab9";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dataName);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 

    $data = "SELECT `RIN`, `RCSID`, `First_name`, `Last_name`, `Alias`, `Phone`, `street`, `city`, `state`, `zip` FROM students";
    $result = $conn->query($data);

    $dataG = "SELECT `id`, `CRN`, `RIN`, `grade` FROM grades";
    $result2 = $conn->query($dataG);

    $dataC = "SELECT `CRN`, `Prefix`, `Number`, `Title`, `section`, `year` FROM COURSES";
    $result3 = $conn->query($dataC);

    if ($result->num_rows > 0) {
  ?>

  <section id="students">
    <div>
      <div class="row">
        <div class="col-lg-1">
          <p></p>
        </div>
        <div class="col-lg-1">
          <p>RIN</p>
        </div>
        <div class="col-lg-1">
          <p>RCSID</p>
        </div>
        <div class="col-lg-1">
          <p>First_name</p>
        </div>
        <div class="col-lg-1">
          <p>Last_name</p>
        </div>
        <div class="col-lg-1">
          <p>Alias</p>
        </div>
        <div class="col-lg-1">
          <p>Phone</p>
        </div>
        <div class="col-lg-1">
          <p>street</p>
        </div>
        <div class="col-lg-1">
          <p>city</p>
        </div>
        <div class="col-lg-1">
          <p>state</p>
        </div>
        <div class="col-lg-1">
          <p>zip</p>
        </div>
        <div class="col-lg-1">
          <p></p>
        </div>
      </div> 
    </div>

    <?php
        while ($row = $result->fetch_assoc()) { ?>
          <div>
            <div class="row">
              <div class="col-lg-1">
                <p></p>
              </div>
              <div class="col-lg-1">
                <?php echo $row["RIN"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["RCSID"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["First_name"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["Last_name"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["Alias"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["Phone"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["street"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["city"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["state"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["zip"] ?>
              </div>
              <div class="col-lg-1">
                <p></p>
              </div>
            </div> 
          </div>
      <?php
        } 
      } else {
        echo "0 results";
      }
      ?>
  </section>



<?php
  if ($result3->num_rows > 0) {
?>

  <section id="courses">
    <div>
      <div class="row">
        <div class="col-lg-1">
          <p></p>
        </div>
        <div class="col-lg-1">
          <p>CRN</p>
        </div>
        <div class="col-lg-1">
          <p>Prefix</p>
        </div>
        <div class="col-lg-1">
          <p>Number</p>
        </div>
        <div class="col-lg-1">
          <p>Title</p>
        </div>
        <div class="col-lg-1">
          <p>Section</p>
        </div>
        <div class="col-lg-1">
          <p>Year</p>
        </div>
      </div> 
    </div>

    <?php
        while ($row = $result3->fetch_assoc()) { ?>
          <div>
            <div class="row">
              <div class="col-lg-1">
                <p></p>
              </div>
              <div class="col-lg-1">
                <?php echo $row["CRN"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["Prefix"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["Number"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["Title"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["section"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["year"] ?>
            </div> 
          </div>
      <?php
        } 
      } else {
        echo "0 results";
      }
      ?>
  </section>




  <?php
  if ($result2->num_rows > 0) {
  ?>
  <section id="grades">
    <div>
      <div class="row">
        <div class="col-lg-1">
          <p></p>
        </div>
        <div class="col-lg-1">
          <p>ID</p>
        </div>
        <div class="col-lg-1">
          <p>CRN</p>
        </div>
        <div class="col-lg-1">
          <p>RIN</p>
        </div>
        <div class="col-lg-1">
          <p>Grade</p>
      </div> 
    </div>

    <?php
        while ($row = $result2->fetch_assoc()) { ?>
          <div>
            <div class="row">
              <div class="col-lg-1">
                <p></p>
              </div>
              <div class="col-lg-1">
                <?php echo $row["id"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["CRN"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["RIN"] ?>
              </div>
              <div class="col-lg-1">
                <?php echo $row["grade"] ?>
            </div> 
          </div>
      <?php
        } 
      } else {
        echo "0 results";
      }
      ?>
  </section>


  <?php
    $conn->close();
  ?>


  <section id="StudentsForm">
    <form action="gradebook.php" method="POST">
      <input type="text" name="RIN" id="rin" placeholder="RIN" />
      <input type="text" name="RCSID" id="rcsid" placeholder="RCSID" />
      <input type="text" name="First_name" id="first" placeholder="First&nbsp;Name" />
      <input type="text" name="Last_name" id="last" placeholder="Last&nbsp;Name" />
      <input type="text" name="Alias" id="alias" placeholder="Alias" />
      <input type="text" name="Phone" id="phone" placeholder="Phone&nbsp;Number" />
      <input type="text" name="street" id="street" placeholder="Street" />
      <input type="text" name="city" id="city" placeholder="City" />
      <input type="text" name="state" id="state" placeholder="State" />
      <input type="text" name="zip" id="zip" placeholder="Zip" />
      <input type="submit" name="submit" value="Insert&nbsp;Students" />  
    </form>
  </section>

  <section id="CoursesForm">
    <form method="POST" action="gradebook.php">
        <input type="text" name="CRN" id="crn" placeholder="Course&nbsp;Registration&nbsp;Number" />
        <input type="text" name="Prefix" id="prefix" placeholder="Prefix" />
        <input type="text" name="Number" id="number" placeholder="Number" />
        <input type="text" name="Title" id="title" placeholder="Title" />
        <input type="text" name="section" id="section" placeholder="Section" />
        <input type="text" name="year" id="year" placeholder="Year" />
        <input type="submit" name="submit" value="Insert&nbsp;Courses" />
    </form>
  </section>

  <section id="GradesForm">
    <form method="POST" action="gradebook.php">
      <input type="text" name="CRN" id="gradesCRN" placeholder="Course&nbsp;Registration&nbsp;Number" />
      <input type="text" name="RIN" id="gradesRIN" placeholder="RIN" />
      <input type="text" name="grade" id="grade" placeholder="Grade" />
      <input type="submit" name="submit" value="Create&nbsp;Grades" />  
    </form>
  </section>
</body>
</html>