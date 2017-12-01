<?php
$str = 'z';
$next = ++$str; 

if (strlen($next) > 1) 
{
 $next = $next[0];
 }
echo $next."\n";
?>