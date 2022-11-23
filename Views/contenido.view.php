<?php 
include 'BD.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contenido</title>
	<link rel="stylesheet" type="text/css" href="views/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="https://static.wixstatic.com/media/39b6c7_efba31bdcb5a405c8071d4758f68785a~mv2.png/v1/crop/x_1,y_0,w_790,h_211/fill/w_157,h_41,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/horizontal%20blanco_edited.png" width="120" height="40" alt="">
  </a>
</nav>

<a style="margin: 40px;" type="button" class="btn btn-success" href="asignar.php"> Asignar curso </a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Curso</th>
      <th scope="col">Grupo</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>


<?php 

if ($result->num_rows > 0) {

  // output data of each row

  while($row = $result->fetch_assoc()) {
    ?>
    
    <tr>
      <td><?php echo $row['first_name']; ?></td>
      <td><?php echo $row['last_name']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['group']; ?></td>
      <td><? if( $row['status'] == 1 ){
          echo "Activo";
      }else{
          echo "Inactivo";
      } ?></td>
      <td><i class="bi bi-pencil-square"></i></td>
      <td><i onclick="del_data('<?php echo $row['cxs_id']; ?>')" class="bi bi-trash"></i></td>
    </tr>

   <?php
  }

} else {

  echo "0 results";

}

$conn->close();


?>
  </tbody>
</table>
<script src="views/js/Main.js"></script>

</body>
</html>