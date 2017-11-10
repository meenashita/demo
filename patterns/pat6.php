<?php 
for ($i=1; $i<=5 ; $i++) {
for ($j=1; $j<=6-$i; $j++) { 
 	echo " ";
 } 
	for ($k=0; $k<(2*$i)-1 ; $k++) { 
		echo "*";
	}
	echo "\n";
}
 ?>