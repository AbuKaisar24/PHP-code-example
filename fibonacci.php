<?php
$t1=0;
$t2=1;
for ($i=1; $i <10 ; $i++) { 
	 echo "$t1";
	 $temp=$t1+$t2;
	 $t1=$t2;
	 $t2=$temp;
}

?>
