<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
</head>
<body>
    <h1>Mark Attendance</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
        // Connect to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "your_database_name";
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch students from the database
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Output student details with radio buttons for attendance
                echo "<label>";
                echo "<input type='radio' name='attendance[" . $row['id'] . "]' value='1'> Present - " . $row['name'];
                echo "</label><br>";
            }
        } else {
            echo "No students found.";
        }

        // Close database connection
        mysqli_close($conn);
        ?>

        <button type="submit" name="submit">Submit Attendance</button>
    </form>

    <?php
    // Process form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        // Connect to database
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Process attendance data
        if (isset($_POST['attendance']) && is_array($_POST['attendance'])) {
            foreach ($_POST['attendance'] as $student_id => $attendance) {
                // Update attendance in the database
                $sql = "UPDATE students SET attendance = '$attendance' WHERE id = '$student_id'";
                if (mysqli_query($conn, $sql)) {
                    echo "Attendance marked successfully for Student ID: $student_id<br>";
                } else {
                    echo "Error updating attendance for Student ID: $student_id - " . mysqli_error($conn) . "<br>";
                }
            }
        }

        // Close database connection
        mysqli_close($conn);
    }
    ?>
</body>
</html>


<td>
                                <input type='radio' name='attendance[" . $row['Roll no'] . "]' value='1'> Present
                                <input type='radio' name='attendance[" . $row['Roll no'] . "]' value='0'> Absent
                            </td>