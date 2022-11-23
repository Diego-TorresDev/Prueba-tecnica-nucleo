<?php session_start();
if (isset($_SESSION['usuario'])) {
	require 'views/asignar.view.php';
} else {
	header('Location: login.php');
}
?>