<?php
include_once 'database1.php';
if(isset($_POST['save']))
{	 
	  $first_name = $_POST['fullname'];
	
	// $city_name = $_POST['city_name'];
	 $email = $_POST['email'];
	  $phno    = $_POST['phno'];
	  $phno1    = $_POST['phno1'];
	  if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phno)) {
  // $phone is valid
}
	 $sql = "INSERT INTO user (Fullname,Email,phno,phno1)
	 VALUES ('$first_name','$email','$phno','$phno1')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("location:view.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>