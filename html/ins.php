<?php
	session_start();
	 if(!isset($_SESSION['un']) || $_SESSION['un']=="")
  {
    header("location:login.php");
  }
	$n=$_POST['name'];
	$g=$_POST['gender'];
	$c=$_POST['country'];
	$s=implode(",",$_POST['c']);
	$d=$_POST['dob'];
	$des="pic/";
	$t=$_FILES['dp']['tmp_name'];
	$fn=$_FILES['dp']['name'];
	move_uploaded_file($t,$des.$fn);

	$con= mysqli_connect("localhost","root","","dayone");
	$ins="INSERT INTO user SET name='$n', gender='$g', country='$c', sub='$s', dob='$d',dp='$fn'";
    $con->query($ins);
	header("location:view.php");

?>
	<h1><?php echo $n; ?></h1>
	<h1><?php echo $g; ?></h1>
	<h1><?php echo $c; ?></h1>
	<h1><?php echo $s; ?></h1>
	<h1><?php echo $d; ?></h1>
	