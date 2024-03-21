<?php
$a = floatval(fgets(STDIN));
$b = floatval(fgets(STDIN));
if ($a > $b) {
   for($i = $b+1; $i <$a; $i++){
     if(($i) % 5 == 2 || ($i) % 5 == 3){
     echo("$i\n");
     }
   }
} else if($a < $b) {
  for($i = $a+1; $i <$b; $i++){
   if(($i) % 5 == 2 || ($i) % 5 == 3){
   echo("$i\n"); 
   }
  }    
  }