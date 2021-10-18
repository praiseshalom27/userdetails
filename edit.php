<?php

include_once 'database1.php'; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from user where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
	$phno	= $_POST['phno'];
	$phno1	= $_POST['phno1'];
	
    $edit = mysqli_query($conn,"update user set Fullname='$fullname', Email='$email', phno='$phno', phno1='$phno1' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:view.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<title>Edit Record</title>
<ul>
  <li><a class="active" href="welcome.php">Home</a></li>
  <li><a href="view.php">View</a></li>
  <li><a href="logout.php">Sign Out</a></li>
</ul>
 
<h1>Update Data</h1>

<form method="POST">
<table border="0">
            <tr> 
                <td>Enter Full Name</td>
                <td><input type="text" name="fullname" value="<?php echo $data['Fullname'] ?>"required="required"></td>
            </tr>
            <tr> 
                <td>Enter Email</td>
                <td><input type="text" name="email" value="<?php echo $data['Email'] ?>"required="required"></td>
            </tr>
			<tr> 
                <td>Enter Ph.No.</td>
                <td><input type="number" name="phno" pattern="^\d{10}$" value="<?php echo $data['phno'] ?>"required="required">
				<input id="button" type="button" value="Add">
				<div id="fn" hidden>2
 
  <input type="text" name=" phno1" pattern="^\d{10}$"value="<?php echo $data['phno1'] ?>">
</div>
<br>
				</td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
<div color="#FF0000"> note:-*provided 10 digits numeric value (xxxxxxxxxx)</div>
</form>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$("#button").click(function() {
  $("#fn").show();
 
});
</script>