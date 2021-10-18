<?php 
include_once 'database1.php';

if(isset($_POST['sub']))
{
$uname = $_POST['uname'];
$upassword = $_POST['upassword'];
$upassword1 = md5($upassword); 
//echo $upassword1;
//echo $uname;
//exit;

$res = mysqli_query($conn,"select* from login where username='$uname'and password='$upassword1'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "You are login Successfully ";
header("location:welcome.php");   // redirection 
	
}
else
{
	echo "Your Login Name or Password is invalid ";
}
}
?>