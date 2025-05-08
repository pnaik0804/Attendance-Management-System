<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed:wght@200;300;400;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../CSS/sign.css" class="">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    
  </style>
</head>
<body>

  <div class="signup-form">
    <h2>Sign Up Form</h2>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "signupdetails";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection fail: " . mysqli_connect_error());
    }
    
      $pname = $_POST['pname'];
      $mob = $_POST['mob'];
      $pass = $_POST['pass'];
      $cpass = $_POST['cpass'];
      $exists = false;
  
      if ($pass == $cpass && !$exists) 
      {
        $sql = "INSERT INTO `user1` ( `Name`, `Password`, `Mob`, `Date`) VALUES ( '$pname', '$pass', '$mob', CURRENT_DATE())";

         $result =mysqli_query($conn, $sql);
         if($result){
          echo "Registration is successfull";
        }
        else{
          echo ("Error Occcured". mysqli_error($conn));
        }

     }
     else{
      echo "Password doesn't match";
     }
    
    }
  
?>
 
    <form action="../html/Sign.php" method="post">

    <label for ="pname">Username</label>
      <input type="text" id ="pname" name="pname"  required>

      <label for ="mob">Mobile Number</label>
      <input type="number" id ="mob" name="mob"  required>

      <label for ="pass">Password</label>
      <input type="password"id="pass" name="pass" required>

      <label for ="cpass">Confirm Password</label>
      <input type="password" id="cpass" name="cpass"  required>
      <button type="submit">Sign Up</button>
    </form>
  </div>
 

</body>
</html>
