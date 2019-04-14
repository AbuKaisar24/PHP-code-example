<?php
$host='localhost';
$user='root';
$pass='';
$db='exam';
$con=mysqli_connect($host,$user,$pass);
if(!$con)
{
die("connection failed".mysqli_connect_error());
}
echo "connection successfull";
mysqli_select_db($con,$db);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form action="create database.php" method="POST">
  	<br>Name:
  	<input type="text" name="name" required>
  	<br>NID:
  	<input type="text" name="nid" required>
  	<br>Modile:
  	<input type="text" name="mobile" required>
  	<br>Email:
  	<input type="email" name="email" required>
  	<br>Gender:
  	<input type="checkbox" name="gender" values="Male">Male
  	<input type="checkbox" name="gender" values="Female">Female
  	<br>Department:
  	<select id="dept" name="dept">
  		<option value="CSE">CSE</option>
  		<option value="EEE">EEE</option>
  		<option value="SWT">SWT</option>
  	</select>
    <br>Choice:
    <input type="radio" name="choice"  value="Option1">Option1
    <input type="radio" name="choice" value="Option2">Option2
    <input type="submit" name="submit">
  </form>
</body>
</html>
<?php
  if(isset($_POST['submit']))
  {
  	$name_info=$_POST['name'];
  	$nid_info=$_POST['nid'];
  	$mobile_info=$_POST['mobile'];
  	$email_info=$_POST['email'];
    $gender_info=$_POST['gender'];
  	$dept_info=$_POST['dept'];
  	$choice_info=$_POST['choice'];
  	$query="INSERT INTO exam_info(name,nid,mobile,email,gender,department,choice) VALUES('$name_info','$nid_info','$mobile_info','$email_info','$gender_info','$dept_info','$choice_info')";
  	$run=mysqli_query($con,$query);
  	if ($run!=NULL) {
  		echo "Inserted successfull";
  	}
  	else
  	{
  		echo "Error".$query."<br>".mysqli_error($con);
  	}

  }
  mysqli_close($con);
?>
