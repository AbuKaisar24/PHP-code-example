<?php
$hostname='localhost';
$user='root';
$password='';
$db='user';
$con=mysqli_connect($hostname,$user,$password);
if(!$con)
{
	die("connection failed:".mysqli_connect_error());
}
else
{
	echo "Connection Successful";
}
mysqli_select_db($con,$db);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
     <form action="database.php" method="POST" >
     	<div style="border: 2px solid black;height: 200px;width: 400px;">
         Name:<br>
     	<input type="text" name="name" required><br>
     	Email:<br>
     	<input type="text" name="email" required><br>
     	Password:<br>
     	<input type="password" name="password" placeholder="eg:123456" pattern=".{6,}"><br><br>
     	<input type="submit" name="submit">
     	</div>
     	
     	
     </form>
</body>
</html>
<?php  
if (isset($_POST['submit'])) {
	$name_info=$_POST['name'];
	$email_info=$_POST['email'];
	$pass_info=$_POST['password'];
    $query="INSERT INTO user_info(name,email,password)VALUES('$name_info','$email_info','$pass_info')";
    $run=mysqli_query($con,$query);


    if($run!=NULL)
    {
    	    	echo "Inserted Successfully";
    }
    else
    {
    	echo "Error:".$query."<br>".mysqli_error($con);
    }
}
mysqli_close($con);
?>