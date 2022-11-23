<?php

$servername = "sql105.epizy.com";

$username = "epiz_32936423";

$password = "vHd5ScbAOKmmvSp";

$dbname = "epiz_32936423_usuarios";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}
 
if (isset($_POST["id_cu"])) {
     $id_cu = $_POST["id_cu"];
   $sql = "DELETE FROM test_courses_x_student WHERE cxs_id= '$id_cu'";

if ($conn->query($sql) === TRUE) {
  echo "Eliminado correctamente";
} else {
  echo "Error: " . $conn->error;
}
   
} else {  
    echo "No recibí ni mondá";
}

if (isset($_POST["estudiante"])) {
    $estudiante = $_POST["estudiante"];
    $curso = $_POST["curso"];
    
    $sql = "INSERT INTO test_courses_x_student (c_id, s_id)
VALUES ($curso, $estudiante)";

if ($conn->query($sql) === TRUE) {
  echo "Asignado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
   


?>
