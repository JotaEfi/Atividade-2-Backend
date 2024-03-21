<?php

$sum=0;
$X = intval(fgets(STDIN));
$Y = intval(fgets(STDIN));

if($X>$Y){
  $aux = $Y;
  $Y = $X;
  $X = $aux;
}

$i=1;
for(; $X<$Y; $X++){
  if($X%2!=0 & $i!=1){
    $sum=$sum+$X;
  }
  $i=0;
}

echo "$sum\n";
?>