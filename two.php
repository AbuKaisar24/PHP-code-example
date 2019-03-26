<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$x=5;
echo $x;
echo "<br>Hello World!";
$s="kaisar";
echo "Abu". $s ."<br>";

$text="Hello world!";
echo "oi";
$x=12;
echo $x;
$a=10;
$b=11;
echo $a+$b;

function f1()
{
	global $a,$b,$c;
	$c=$a+$b;
}
f1();
echo "$a";
echo $c;
function f2()
{
	$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
echo $c;
function f3()
{
	static $y=0;
	echo $y;
	$y++;

}
echo "<br>";
f3();
echo "<br>";
f3();
echo "<br>";
print "<h3>hello php</h3>";
var_dump($a);
$t=true;
$f=false;
var_dump($t);
var_dump($f);
$cars= array("volvo","bmw","toyota");
var_dump($cars);
?>
</body>
</html>
