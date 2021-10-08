<?php
 	session_start();
  if(!isset($_SESSION['un']) || $_SESSION['un']=="")
  {
    header("location:login.php");
  }
  
	$con= mysqli_connect("localhost","root","","dayone");
		$id= $_REQUEST['id'];
	$sel="SELECT * FROM user WHERE id='$id'";
	$res=$con->query($sel);
		

?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<?php
	while($row=$res->fetch_assoc())
	{
	?>
		<form action="upd.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $row['id'];?>">
		<label>Name</label>
		<input type="text" name="name" placeholder="Enter Name" autocomplete="off" value="<?php echo $row['name'];?>" required>
		<label>Gender</label>
		<input type="radio" name="gender" value="male" <?php if($row['gender']=="male"){echo "checked";}?>/>Male
		<input type="radio" name="gender" value="female" <?php if($row['gender']=="female"){echo "checked";}?>/>Female
		<label>Country</label>
		<select name="country">
			<option value="india"<?php if($row['country']=="india"){echo "selected";}?>>India</option>
			<option value="Us"<?php if($row['country']=="Us"){echo "selected";}?>>Us</option>
			<option value="Pak"<?php if($row['country']=="Pak"){echo "selected";}?>>Pak</option>
		</select>
		<?php
			$checkbx= $row['sub'];
			$c=explode(",",$checkbx);
		?>
		<label>Subject</label>
		<input type="checkbox" name="c[]" value="c" <?php if(in_array("c",$c)){echo "checked";}?>>C
		<input type="checkbox" name="c[]" value="ch" <?php if(in_array("ch",$c)){echo "checked";}?>>CH
		<input type="checkbox" name="c[]" value="java" <?php if(in_array("java",$c)){echo "checked";}?>>Java
		<label>DOB</label>
		<input type="date" name="dob" placeholder="DOB" autocomplete="off" value="<?php echo $row['dob'];?>">
		<label>dp</label>
		<p><img src="pic/<?php echo $row['dp']?>" style="width: 100px;"></p>
		<input type="file" name="dp">
		<input type="submit" name="submit" value="submit">
		</form>

		<?php
	}
		?>
</body>
</html>