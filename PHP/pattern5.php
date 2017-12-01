<!--Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24.-->

<?php 
$n=4;
$fact=1;
for ($i=1; $i <=$n-1 ; $i++) { 
	$fact=$fact*($i+1);
}
 echo "factorial of $n is " . $fact . "\n";
 ?>