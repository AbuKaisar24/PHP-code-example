<html>
<body>
<table border="2px soldi black" align="center">
	<tr>
		<th>Name</th>
		<th>Nid</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Department</th>
		<th>Choice</th>
	</tr>
<?php
$con=mysqli_connect("localhost","root","","exam");
if($con-> connect_error)
{
  die("error".$con-> connect_error);
}
$sql="SELECT * from exam_info where name='kaisar'";
$re=$con->query($sql);
if ($re->num_rows>0) 
{
	while ($row=$re->fetch_assoc()) {
		echo "<tr><td>".$row['name']."</td><td>".$row['nid']."</td><td>".$row['email']."</td><td>".$row['mobile']."</td><td>".$row['gender']."</td><td>".$row['department']."</td><td>".$row['choice']."</td></tr>";
}
}
?>
</table>
</body>
</html>