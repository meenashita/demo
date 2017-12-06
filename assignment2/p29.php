<?php 
function prime_num($n){
	for ($x=2; $x<$n ; $x++) { 
		if ($n%$x==0) {

			return 0;
		}
	}
return 1;
}
$y= prime_num(28);
if ($y==0) {
	echo "not a prime number";
}
else{
	echo "is a prime number";
}
?>
