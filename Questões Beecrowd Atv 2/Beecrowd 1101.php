<?php
$M=1;
$N=1;
$count=NULL;

while($M>=1 and $N>=1){
  $count=0;
  $input = fgets(STDIN);
  $valores = explode(" ", $input);
  $M = intval($valores[0]);
  $N = intval($valores[1]);
  if($M>=1 and $N>=1){
    if($M>$N){
      $aux = $N;
      $N = $M;
      $M = $aux;
    }
    for(; $M<=$N; $M++){
      echo "$M ";
      $count=$count+$M;
    }
    echo "Sum=$count\n";
  }
}

?>