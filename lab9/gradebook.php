<?php
   $servername = "localhost";
   $username = "root";
   $password = "123root";
   $dbname = "websyslab9";
   $conn = mysqli_connect($servername, $username, $password, $dbname);
 
   if (isset($_POST['submit'])){
     //defines all variables being inserted into table
     $RIN = $_POST['RIN'];
     $RCSID = $_POST['RCSID'];
     $First_name = $_POST['First_name'];
     $Last_name = $_POST['Last_name'];
     $Alias = $_POST['Alias'];
     $Phone = $_POST['Phone'];
     $street = $_POST['street'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $zip = $_POST['zip'];
     $CRN = $_POST['CRN'];
     $Prefix = $_POST['Prefix'];
     $Number = $_POST['Number'];
     $Title = $_POST['Title'];
     $section = $_POST['section'];
     $year = $_POST['year'];
     $grade = $_POST['grade'];
 
     $query = "INSERT INTO students(RIN, RCSID, First_name, Last_name, Alias, Phone, street, city, state, zip) VALUES('$RIN', '$RCSID', '$First_name', '$Last_name', '$Alias', '$Phone', '$street', '$city', '$state', '$zip')";
     $query = "INSERT INTO COURSES(CRN, Prefix, Number, Title, section, year) VALUES('$CRN', '$Prefix', '$Number', '$Title', '$section', '$year')";
     $query = "INSERT INTO grades(CRN, RIN, grade) VALUES($CRN', '$RIN', '$grade')";
 
     $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
 
     if($run){
       echo " Form Submitted Successfully";
     }else{
       echo "Form not submitted";
     }
   }
 
   //After one second, user is brought back to home page
   header("refresh:1; url=index.php")
?>