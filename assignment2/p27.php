<?php 
function greatest($n){
	$x=$n>30?"greater than 30":($n>20?"greater than 20":($n>10?"greater than 10":"try another number"));
   echo $n." : ".$x."\n";
 }
 greatest(4);
 greatest(35);
 ?>
