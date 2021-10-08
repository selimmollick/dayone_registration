<?php

  session_start();
  if(!isset($_SESSION['un']) || $_SESSION['un']=="")
  {
    header("location:login.php");
  }
	$con= mysqli_connect("localhost","root","","dayone");
	
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Information</h2>
   <a href="form.php" class="btn btn-success mb-4">Add New</a> 
     <a href="logout.php" class="btn btn-success mb-4">Logout</a>        
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Subject</th>
        <th>DoB</th>
        <th>Dp</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
    	$fet= "SELECT * FROM user";
    	$res=$con->query($fet);
    	while ($row=$res->fetch_assoc())
    	 {
    		
    	
    ?>
      <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['gender'] ?></td>
        <td><?php echo $row['country'] ?></td>
         <td><?php echo $row['sub'] ?></td>
          <td><?php echo $row['dob'] ?></td>
          <td><img src="pic/<?php echo $row['dp']?>" style="width: 100px;"></td>
          <td><a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a></td>
           <td ><a onclick="return confirm('are you save?');" href="del.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>      
          </tr>
      <?php
      	}
      ?>
      
    </tbody>
  </table>
</div>

</body>
</html>

