<?php
	session_start();
	 if(!isset($_SESSION['un']) || $_SESSION['un']=="")
  {
    header("location:login.php");
  }
  	$id=$_POST['id'];
	$n=$_POST['name'];
	$g=$_POST['gender'];
	$c=$_POST['country'];
	$s=implode(",",$_POST['c']);
	$d=$_POST['dob'];
	$des="pic/";
	$t=$_FILES['dp']['tmp_name'];
	$fn= $_FILES['dp']['name'];
	move_uploaded_file($t,$des.$fn);

	$con= mysqli_connect("localhost","root","","dayone");
	if($_FILES['dp']['name']!= '')
	{	
	$ins="UPDATE user SET name='$n', gender='$g', country='$c', sub='$s', dob='$d',dp='$fn' WHERE id= '$id'";
	}
	else
	{
	$ins="UPDATE user SET name='$n', gender='$g', country='$c', sub='$s', dob='$d' WHERE id= '$id' ";
	}
    $con->query($ins);
	header("location:view.php");

?>