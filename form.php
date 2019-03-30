<?php 
$hostname='localhost';
$user='root';
$password='';
$db='labtest';
$con=mysqli_connect($hostname,$user,$password);
if(!$con)
{
	die("connection failed:".mysqli_connect_error());
}
mysqli_select_db($con,$db)
?>
<html>
<head>
</head>
<body>
      <div style="border: 2px;background: black;height: 100px;padding: 5px;text-align: center;color: white;">
      	<h1>Welcome My page</h1>

      	
      </div>
      <div style="line-height:30px;background:#eeeeee;float: left;height:500px;width:150px;padding: 5px;">
      	<br>Home
      	<br>Details
      	<br>About me
      	<br>Setting<br>
      </div>
      <div>
      	<div style="float: left;padding:5px;border: 2px solid black;margin: auto;position: absolute;left: 50%;right: 50%;height: 400px;width: 400px;">
      	 <form style="background:#eeeeee;" accept="form.php" method="POST">
      	 	Name:<br>
      	 	<input style="display: block;margin-right: auto;margin-left: auto;height: 20px"type="text" name="name" required; >
      	 	<br>Email:<br>
      	 	<input style="display: block;margin-right: auto;margin-left: auto;height: 20px" type="text" name="email"required;>
      	 	<br>Password:<br>
      	 	<input style="display: block;margin-right: auto;margin-left: auto; height: 20px;" type="password" name="password"placeholder="1234"pattern=".{6,}">
            <br>ok<br>
            <input type="checkbox" name="checkbox">
      	 	<br><br><input style="display: block;margin-right: auto;margin-left: auto; height: 30px; width: 150px;" type="submit" name="submit">
      	 </form>	
      	</div>
      	
      </div>
      <div style="background: black;color: white;clear: both;text-align: center;padding: 5px;height:80px;">
      	Copyright @ Github.com
      </div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	$name_info=$_POST['name'];
	$email_info=$_POST['email'];
	$pass_info=$_POST['password'];
	$query="INSERT INTO lab_info(name,email,password)VALUES('$name_info','$email_info','$pass_info')";
	$run=mysqli_query($con,$query);
	if($run!=NULL)
	{
		echo "Insert successfully";
	}
	else
	{
		echo "Error:".query."<br>".mysqli_error($con);
	}
}
mysqli_close($con);
?>