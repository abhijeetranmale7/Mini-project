<?php
	require('connect.php'); 
	unset($_SESSION['studentid']);
	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);

	header("Location: student.php");
?>