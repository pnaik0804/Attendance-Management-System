<!DOCTYPE html>
<html>
<head>
  <title>The Staffroom</title>
  <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed:wght@200;300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/Staff_Details.css" class="rel">
</head>
<body>
  <div class="heading"><h1>Efficheck's Staff Details</h1></div>
  
  <form>
    <div>
      <input type="text" id="username" name="username" placeholder="Name" required>
    </div>
    <div>
      <div>
  
        <select id="year" name="year" required>
          <option value="">Select Year</option>
          <option value="">FE</option>
          <option value="">SE</option>
          <option value="">TE</option>
          <option value="">BE</option>
        </select>
      </div>
      <select id="Branch" name="Branch" required>
        <option value="">Select Branch</option>
        <option value="cs">Computer Engineering</option>
        <option value="it">Information Technology</option>
        <option value="extc">Electronics and Telecommunication Engineering</option>
        <option value="mech">Mechanical Engineering</option>
        <option value="aids">Artificial Intelligence and Data Structures</option>
      </select>
    </div>
    <div>
      
      <select id="div" name="Division" required>
        <option value="">Select division</option>
        <option value="a">A</option>
        <option value="b">B</option>
      </select>
    </div>
    <div>
  
      <select id="sub" name="Subject" required>
        <option value="">Select subject</option>
        <option value="ds">DS</option>
        <option value="cg">CG</option>
        <option value="em">EM-III</option>
        <option value="dlcoa">DLCA</option>
        <option value="java">JAVA</option>
        <option value="dsgt">DSGT</option>
      </select>
    </div>
    <div>
   
      <input type="number" id="no" name="no" placeholder="Contact no." required >
    </div>
    <div>
      <!-- <label for="email">Email:</label> -->
      <input type="email" id="email" name="email" placeholder="Email Address" required>
    </div>
   <input type="submit" value="Submit" class="btn">
  </form>
</body>
</html>
