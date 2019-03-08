<?php

include "connect.php";

$id = $_GET['id'];

$new = mysqli_query($conn,"SELECT * FROM `users` WHERE id = '$id' ");
$check = mysqli_fetch_array($new);

if(isset($_POST['save']))
{     
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$edit = mysqli_query($conn,"UPDATE `users` SET `username`='$username',`email`='$email',`password`='password' WHERE id = '$id' ");
  $query = mysqli_query($conn,$edit);

    if (!$edit)
    {
       echo mysql_error(); 	
    }
    else
    {
    	header("location:retrive.php");
    }

}

?>



<form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" value="<?php echo $check['username'];?>" class="form-control"> <br>

 <label> E-Mail: </label>
 <input type="text" name="email" value="<?php echo $check['email'];?>" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" value="<?php echo $check['password'];?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="save"> Submit </button><br>

 </div>
 </form>