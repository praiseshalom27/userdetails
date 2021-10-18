<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>
<ul>
  <li><a class="active" href="welcome.php">Home</a></li>
  <li><a href="insert.php">Add</a></li>
  <li><a href="logout.php">Sign Out</a></li>
</ul>
<h2>Employee Details</h2>
<table border="2">
  <tr>
    <td><h4>Sr.No.</h4></td>
    <td><h4>Full Name</h4></td>
    <td><h4>Email</h4></td>
	 <td><h4>Ph.No.</h4></td>
	 <td><h4>Ph.No2.</h4></td>
    <td><h4>Edit</h4></td>
    <td><h4>Delete</h4></td>
  </tr>

<?php

include_once 'database1.php';// Using database connection file here

$records = mysqli_query($conn,"SELECT * FROM user order by id desc");

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['Fullname']; ?></td>
    <td><?php echo $data['Email']; ?></td>  
    <td><?php echo $data['phno']; ?></td> 	
    <td><?php echo $data['phno1']; ?></td> 	
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>" 
	onclick="return confirm('Are you sure you want to delete?'); " >Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>
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