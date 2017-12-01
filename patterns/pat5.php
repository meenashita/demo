<?php 
for ($i=1; $i <=5 ; $i++) { 
	for ($j=1; $j<=($i>3?6-$i:$i) ; $j++) { 
		echo "*";
	}
	echo "\n";
}
 ?>