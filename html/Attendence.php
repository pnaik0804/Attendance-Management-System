<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/attendence.css" class="rel">
    <title>Attendance.com</title>
    <style>
        /* CSS for the table */
        .table {
            width: 60%;
            border-collapse: collapse;
            margin: 50px auto;
        }

        .table th,
        .table td {
            border: 2px solid black;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: rgb(50, 106, 228);
        }
    </style>
</head>

<body>

    <form action="../html/Attendence.php" method="POST" class="sheet">
        <h1 class="head">RGIT Attendance Sheet 2023-2024</h1>
        <h3>Staff Name :</h3>
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

        <select id="sub" name="sub" required>
            <option value="">Select Subject</option>
            <option value="Maths">Maths</option>
            <option value="OS">OS</option>
            <option value="DBMS">DBMS</option>
            <option value="MP">MP</option>
            <option value="AOA">AOA</option>
            <option value="Python">Python</option>
        </select>

        <button type="submit" class="btn" name="search">Search</button>
    
    </form>

    <?php
    $sub="";

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "signupdetails";

        // Connect to the database
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check database connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Process form submission
        if (isset($_POST['search'])) {
            // Fetch attendance data based on selected criteria
            $year = $_POST['year'];
            $Branch = $_POST['Branch'];
            $Div = $_POST['Div'];
            $Sub = $_POST['sub'];

            $sql = "SELECT * FROM `attendence` WHERE Branch = '$Branch' AND Year = '$year' AND Division = '$Div'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='POST'>";
                echo "<table class='table'>";
                echo "<thead>
                        <tr>
                            <th scope='col'>Roll no</th>
                            <th scope='col'>Name</th>
                            <th scope='col'>Year</th>
                            <th scope='col'>Branch</th>
                            <th scope='col'>Division</th>
                            <th scope='col'>Status</th>
                        </tr>
                    </thead>";
                echo "<tbody>";
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . $row['Roll no'] . "</td>
                            <td>" . $row['Name'] . "</td>
                            <td>" . $row['Year'] . "</td>
                            <td>" . $row['Branch'] . "</td>
                            <td>" . $row['Division'] . "</td>
                            <td>
                                <input type='radio' name='attendance[$i]' value=1> Present
                                <input type='radio' name='attendance[$i]' value=0> Absent
                            </td>
                        </tr>";
                    $i++;
                } 
                echo "</tbody>";
                echo "</table>";

                // Print the "Mark Attendance" button
                echo "<button type='submit' class='btn' name='mark'>Mark Attendance</button>";
                echo "</form>";
            } else {
                echo "No records found";
            }
        }  
    if (isset($_POST['mark'])) {
        // if (!empty($_POST['sub'])) {
        //     $Sub = $_POST['sub'];

        //     // Update attendance for selected subject
        //     // ...
        // } else {
        //     echo "Subject not selected.";
        // }
        // Handle marking attendance action
        if (isset($_POST['attendance'])) {
            
            $attendance = $_POST['attendance'];
            foreach ($attendance as $roll => $value) {
                // Update attendance in the database
                // if ($Sub == "Maths") {
                    $sql = "UPDATE `attendence` SET `MP` = `MP`+'$value' WHERE `Roll no` = 401 + '$roll'";
                // } elseif ($Sub == "OS") {
                //     $sql = "UPDATE `attendence` SET `OS` = `OS` + '$value' WHERE `Roll no` =  401+ '$roll'";
                // } elseif ($Sub == 'DBMS') {
                //     $sql = "UPDATE `attendence` SET `DBMS` = `DBMS`+'$value' WHERE `Roll no` = 401+ '$roll'";
                // } elseif ($Sub == "AOA") {
                //     $sql = "UPDATE `attendence` SET `AOA` = `AOA`+'$value' WHERE `Roll no` = 401+ '$roll'";
                // } elseif ($Sub == "MP") {
                //     $sql = "UPDATE `attendence` SET `MP` =`MP`+ '$value' WHERE `Roll no` = 401+ '$roll'";
                // } else {
                //     $sql = "UPDATE `attendence` SET `Python` =`Python`+ '$value' WHERE `Roll no` =401 + '$roll'";
                // }

                if (mysqli_query($conn, $sql)) {
                    echo "Attendance marked successfully for Roll no: $roll<br>";
                } else {
                    echo "Error updating attendance: " . mysqli_error($conn) . "<br>";
                }
            }
            $sql = "UPDATE `attendence` SET `Total_MP` = `Total_MP`+1";
            $answer =mysqli_query($conn, $sql);
        }

            // if ($Sub == "Maths") {
            //     $sql = "UPDATE `attendence` SET `Total_Maths` = `Total_Maths`+1  ";
               
            // } elseif ($Sub == "OS") {
            //     $sql = "UPDATE `attendence` SET `Total_OS` = `Total_OS`+ 1";
            // } elseif ($Sub == "DBMS") {
            //     $sql = "UPDATE `attendence` SET `Total_DBMS` = `Total_DBMS`+1 ";
            // } elseif ($Sub == "AOA") {
            //     $sql = "UPDATE `attendence` SET `Total_AOA` = `Total_AOA`+1";
            // } elseif ($Sub == "MP") {
             
            // } else {
            //     $sql = "UPDATE `attendence` SET `Total_Python` = `Total_Python`+ 1";
            // }

            //   $answer = mysqli_query($conn, $sql);
        
         

        }
    }

// Close database connection

?>
</body>
</html>