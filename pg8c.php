<?php
$a= array(
array(1,2,3),
array(4,5,6),
array(7,8,9)
);
$b=array(
array(2,6,4),
array(3,2,1),
array(4,2,1)
);
$c=array();
for($i=0;$i<=2;$i++) {
	for($j=0;$j<=2;$j++) {
		$c[$i][$j]=0;
		for($k=0;$k<=2;$k++) {
		$c[$i][$j]+=$a[$i][$k]*$b[$k][$j];
	}
}
}
echo"<p>matrix1</p>";
echo"<pre/>";print_r($a);
echo"<p>matrix2</p>";
echo"<pre/>";print_r($b);
echo"<p>resultant matrix</p>";
echo"<pre/>";print_r($c);

?>	
