<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "signupdetails";

  $conn = mysqli_connect($servername, $username, $password, $database);
  $rollNo = $_POST['rollNo'];
  $name = $_POST['name'];
  $year = $_POST['year'];
  $Branch= $_POST['Branch'];
  $Div = $_POST['Div'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  // $gr = $_POST['gr'];
  $check = true;

  $sql = "INSERT INTO `attendence` (`Name`, `Roll no`, `Year`, `Branch`, `Division`, `phone`,`Email`,`Maths`, `OS`, `DBMS`, `AOA`, `MP`, `Python`, `Total_Maths`, `Total_OS`, `Total_DBMS`, `Total_AOA`, `Total_MP`, `Total_Python`, `Date`) VALUES ('$name', '$rollNo', '$year', '$Branch', '$Div','$phone',' $email', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, CURRENT_DATE())";
  $result =mysqli_query($conn,$sql);
  $check = false;
  if($result){
  
    echo "Student registration is successful";
  }
    else{
      echo "Same Roll no already exists please try again !!!";
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="../CSS/students.css" class="rel">
     <link
        href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
</head>
<body>
  
    <form action="../html/Students.php" method = "POST">
    <h1 class="head">Student Details</h1>
       <label for="name">Name :</label>
        <input type="text" id="name" name="name" required> 

        <select id="year" name="year" required>
            <option value="">Select Year</option>
            <option value="F.E">F.E</option>
            <option value="S.E">S.E</option>
            <option value="T.E">T.E</option>
            <option value="B.E">B.E</option>
          </select>
    
            <select id="Branch" name="Branch" required>
                <option value="">Select Branch</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Artificial Intelligence and Data Science">Artificial Intelligence and Data Science</option>
              </select>
        
          <select id="Div" name="Div" required>
              <option value="">Select Division</option>
              <option value="A">A</option>
              <option value="B">B</option>
            </select>

          <label for="rollNo">Roll No :</label>
        <input type="text" id="rollNo" name="rollNo" required><br>
<!-- 
        <label for="gr">GR No :</label>
        <input type="number" id="gr" name="gr" required><br> -->

        <h2 class="head">Contact Details</h2>

        <label for="email">Email Id</label> 
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Mobile Number : </label>
        <input type="number" id="phone" name="phone" required ><br><br>

        <button type ="submit"class="btn">Submit</button> 
    </form>
</body>
</html>