
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT test_courses_x_student.c_id, test_students.first_name, test_courses.c_id
FROM test_courses_x_student 
INNER JOIN test_students, test_courses ON test_courses_x_student.s_id = test_students.s_id AND test_courses_x_student.c_id = test_courses.c_id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Nombre: " . $row["first_name"]. " " . $row["c_id"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>