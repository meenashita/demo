<!--Create a script to construct the following pattern, using a nested for loop.

* 
* * 
* * * 
* * * * 
* * * * * 
* * * * * 
* * * * 
* * * 
* * 
* -->

<?php 
for($x=1;$x<=5;$x++){
	for($y=1;$y<=$x;$y++){
		echo "*";
		if ($y<$x) {
			echo " ";
			# code...
		}
	}
echo "\n";
}
for($x=5;$x>=1;$x--){
	for($y=1;$y<=$x;$y++){
		echo "*";
		if($y<$x){
			echo " ";
		}
	}
	echo "\n";
}

 ?>
