<?php include('db_connect.php');

	$id=$_GET['id'];
	$student=delete_data($conn,$id);

	header('location:index.php');
 ?>