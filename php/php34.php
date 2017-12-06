<?php
$text="phpresource";
$searchchar="r";
$count="0"; 

for($i="0"; $i<strlen($text); $i=$i+1){
    
    if(substr($text,$i,1)==$searchchar){
    
       $count=$count+1;
    }

}

echo $count

?>