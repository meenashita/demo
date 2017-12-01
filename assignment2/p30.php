<?php 
 function palindrome($text){
 	if ($text==strrev($text)) {
 		return 0;
 	}
 	else{
 		return 1;
 	}
 }
 echo palindrome('malayalam');
 ?>