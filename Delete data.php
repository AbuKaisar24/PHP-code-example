<?php
$con=mysqli_connect('localhost','root','','exam');
if(!$con)
{
	die("Connection fail:".mysqli_connect_error());
}
$query="DELETE  from exam_info WHERE nid='1234'";

if (mysqli_query($con, $query)) {
    echo "Record delete successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);
?>