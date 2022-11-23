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

<div class="container">

  <div class="form-group">
    <label for="exampleInputEmail1">Selecciona un estudiante</label>
    <select type="email" class="form-control" id="estudiante" aria-describedby="emailHelp" placeholder="Enter email">
    
 <?php
    
    if ($result2->num_rows > 0) {

  // web output data of each row

  while($row = $result2->fetch_assoc()) {
    ?>
    <option value="<?php echo $row['s_id']; ?>"><?php echo $row['first_name']; ?></option>
    <?php
  }

} else {

  echo "0 results";

}


?>
   </select>
    <small class="form-text text-muted">Estudiante sin matrícula no aparecerá en la lista.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Selecciona un estudiante</label>
    <select id="curso" class="form-control" >
    
 <?php
    
    if ($result3->num_rows > 0) {



  while($row = $result3->fetch_assoc()) {
    ?>
    <option value="<?php echo $row['c_id']; ?>"><?php echo $row['name']; ?></option>
    <?php
  }

} else {

  echo "0 results";

}

$conn->close();


?>
   </select>
    <small id="emailHelp" class="form-text text-muted">Estudiante sin matrícula no aparecerá en la lista.</small>
  </div>
  <button onclick="asignar();" type="submit" class="btn btn-primary">Asignar</button>

 </div>

<script src="views/js/Main.js"></script>

</body>
</html>