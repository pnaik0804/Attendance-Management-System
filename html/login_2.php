<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RajivGandhiAttendence.com</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/login.css" class="rel">
</head>
<body>
    <div class="Login-container">
        <div class="lg">
          <img src = "../Images/logo.png" height="80px" width="240px" id="logo" >
          <!-- <h3>e-fficheck</h3> -->
          <h1>Login</h1>
        
          <p>Don't have an account<a href="./Sign.php">Create Account</a></p>
          <?php


if($_SERVER['REQUEST_METHOD']=='POST'){

 $servername ="localhost";
 $username= "root";
 $password= "";
 $database = "signupdetails";
 $conn =mysqli_connect($servername,$username,$password,$database);


  $name = $_POST['name'];
  $pass = $_POST['pass'];
  $sql = "SELECT * FROM user1 WHERE Name = '$name' AND Password = '$pass'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  
  if ($num==1) {
      echo " Login Successfull ! ";
      session_start();
      $_SESSION['loggedin'] =true;
      $_SESSION['name'] = $name;
      header("location: ../html/RealHome.php"); // to send the user where we want to

  }
  else{
    echo "Invalid Credintials please try again";
  }
  
}

  ?>
          <form action = "../html/login_2.php" method="POST">
            <label for="name" >Username:</label> <br>
          <input type ="text" name= "name" id ="name" required><br>

          <label for ="pass">Password : </label><br>
          <input type = "password"  name="pass"  id = "pass" required><br>
          
        <button type ="submit"class="btn">Submit</button>  
        </form>
        </div>
  
        <div class="img">
           <img src = "../Images/college.jpeg">
        </div>
    </div>
</body>
</html>