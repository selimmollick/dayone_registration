<?php
	$conn= mysqli_connect("localhost","root","","dayone");
		$de= $_GET['id'];
	$del= "DELETE FROM user WHERE id='$de' ";
	$conn->query($del);
	header("location:view.php");
?>