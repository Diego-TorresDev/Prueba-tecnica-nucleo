<?php

$servername = "sql105.epizy.com";

$username = "epiz_32936423";

$password = "vHd5ScbAOKmmvSp";

$dbname = "epiz_32936423_usuarios";





$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}



$sql = "SELECT *

FROM test_courses_x_student c 
JOIN test_students s ON c.s_id = s.s_id
JOIN test_courses f ON c.c_id = f.c_id ";

$result = $conn->query($sql);

$sql2 = "SELECT *

FROM test_students";

$result2 = $conn->query($sql2);

$sql3 = "SELECT *

FROM test_courses";

$result3 = $conn->query($sql3);



?>