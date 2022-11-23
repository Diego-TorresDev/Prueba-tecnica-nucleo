<?php session_start();
if (isset($_SESSION['usuario'])) {
	require 'views/link.view.php';
} else {
	header('Location: link.php');
}
?>