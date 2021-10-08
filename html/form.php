<?php 
	session_start();
 	if(!isset($_SESSION['un']) || $_SESSION['un']=="")
  	{
    header("location:login.php");
  	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
		<form action="ins.php" method="post" enctype="multipart/form-data">
		<label>Name</label>
		<input type="text" name="name" placeholder="Enter Name" autocomplete="off" required>
		<label>Gender</label>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<label>Country</label>
		<select name="country">
			<option value="India">India</option>
			<option value="Us">Us</option>
			<option value="Pak">Pak</option>
		</select>
		<label>Subject</label>
		<input type="checkbox" name="c[]" value="c">C
		<input type="checkbox" name="c[]" value="ch">CH
		<input type="checkbox" name="c[]" value="java">Java
		<label>DOB</label>
		<input type="date" name="dob" placeholder="DOB" autocomplete="off" required>
		<label>dp</label>
		<input type="file" name="dp" required>
		<input type="submit" name="submit" value="submit">
		</form>
</body>
</html>