<?php
//including the database connection file
include_once 'database1.php';

//getting id of the data from url
$id = $_GET['id'];


//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM user WHERE id=$id");


//redirecting to the display page (index.php in our case)
if($result)
  {
  echo "<script>alert('Record successfully deleted!')</script>";
      header("Location:view.php");
  }
  else
  {
      echo mysql_error();
  }
?>