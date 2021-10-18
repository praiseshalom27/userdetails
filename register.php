<?php
include_once 'database1.php';
if(isset($_POST['submit']))
{	 
	 $first_name = $_POST['fullname'];
	 $password    = $_POST['password'];
	 $password     = md5($password); 
	 $sql = "INSERT INTO login (username,password)
	 VALUES ('$first_name','$password')";
	 if (mysqli_query($conn, $sql)) {
		
		echo "New record created successfully !<a href='login-form.php'>Click here to Login</a>";
		//header("location:login-form.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>