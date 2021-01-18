<?php 
	session_start();
	if (!isset($_SESSION['username']) || strlen($_SESSION['username']) == 0)
	{
		//geen geldige login:
		header('location:index.php');
		exit();
	}
?>