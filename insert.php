<!DOCTYPE html>
<html>
<title>Insert New Record</title>
  <body>
   <ul>
  <li><a class="active" href="welcome.php">Home</a></li>
  <li><a href="view.php">View</a></li>
  <li><a href="logout.php">Sign Out</a></li>
</ul>
   
  <h1>Insert New Record</h1>
	<form method="post" action="process.php">
	
	<table border="0">
            <tr> 
                <td>Enter Name</td>
                <td><input type="text" name="fullname" required="required"></td>
            </tr>
            
            <tr> 
                <td>Enter Email</td>
                <td><input type="email" name="email" required="required"></td>
            </tr>
			<tr> 
                <td>Enter Phone Number*</td>
                <td><input type="text" name=" phno" pattern="^\d{10}$"required="required">
				<input id="button" type="button" value="Add">
				<div id="fn" hidden>Second Number :
 
  <input type="text" name=" phno1" pattern="^\d{10}$">
</div>
<br></td>
				
<br>

<br>
            </tr>
			<tr>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</tr>
            <tr>
               
                <td><input type="submit" name="save" value="Submit"></td>
            </tr>
        </table>
		note:-*provided 10 digits numeric value (xxxxxxxxxx)
	
	
	
	</form>
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
<script>
$("#button").click(function() {
  $("#fn").show();
 
});
</script>