<?php
	session_start();
	$name= $_POST['name'];
	$pass= $_POST['pass'];
	$con= mysqli_connect("localhost","root","","dayone");
	$sd="SELECT * FROM login WHERE uname='$name' AND pass='$pass'";
	$rs=$con->query($sd);
	if($rs->num_rows>0)
	{
		$_SESSION['un']= $name;
		header("location:view.php");
	}
	else
	{
		?>
		<script>
			alert('sorry');
			window.location="login.php";
		</script>
		<?php
	}
	
?>
	